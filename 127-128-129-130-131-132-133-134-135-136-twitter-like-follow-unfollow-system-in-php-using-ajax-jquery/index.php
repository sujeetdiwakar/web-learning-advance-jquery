<!--
//index.php
!-->

<?php

include('database_connection.php');

session_start();

if(!isset($_SESSION['user_id']))
{
    header('location:login.php');
}

?>

<html>  
    <head>  
        <title>Twitter Like Follow Unfollow System in PHP using Ajax jQuery</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>  
    <body>  
        <div class="container">
   <?php
            include('menu.php');
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Start Write Here</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" id="post_form">
                                <div class="form-group">
                                    <textarea name="post_content" id="post_content" maxlength="160" class="form-control" placeholder="Write your short story"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="action" value="insert" />
                                    <input type="submit" name="share_post" id="share_post" class="btn btn-primary" value="Share" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Trending Now</h3>
                        </div>
                        <div class="panel-body">
                            <div id="post_list">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">User List</h3>
                        </div>
                        <div class="panel-body">
                            <div id="user_list"></div>
                        </div>
                    </div>
                </div>
            </div>
  </div>
    </body>  
</html>

<script>  
$(document).ready(function(){
 
 $('#post_form').on('submit', function(event){
        event.preventDefault();
        if($('#post_content').val() == '')
        {
            alert('Enter Story Content');
        }
        else
        {
            var form_data = $(this).serialize();
            $.ajax({
                url:"action.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    alert('Post has been shared');
                    $('#post_form')[0].reset();
                    fetch_post();
                }
            })
        }
    });

    fetch_post();

    function fetch_post()
    {
       var action = 'fetch_post';
       $.ajax({
            url:'action.php',
            method:"POST",
            data:{action:action},
            success:function(data)
            {
                $('#post_list').html(data);
            }
       })
    }

    fetch_user();

    function fetch_user()
    {
        var action = 'fetch_user';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{action:action},
            success:function(data)
            {
                $('#user_list').html(data);
            }
        });
    }

    $(document).on('click', '.action_button', function(){
        var sender_id = $(this).data('sender_id');
        var action = $(this).data('action');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{sender_id:sender_id, action:action},
            success:function(data)
            {
                fetch_user();
                fetch_post();
            }
        })
    });

    var post_id;
    var user_id;

    $(document).on('click', '.post_comment', function(){
        post_id = $(this).attr('id');
        user_id = $(this).data('user_id');
        var action = 'fetch_comment';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{post_id:post_id, user_id:user_id, action:action},
            success:function(data){
                $('#old_comment'+post_id).html(data);
                $('#comment_form'+post_id).slideToggle('slow');
            }
        })
        
    });

    $(document).on('click', '.submit_comment', function(){
        var comment = $('#comment'+post_id).val();
        var action = 'submit_comment';
        var receiver_id = user_id;
        if(comment != '')
        {
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{post_id:post_id,receiver_id:receiver_id,comment:comment,action:action},
                success:function(data)
                {
                    $('#comment_form'+post_id).slideUp('slow');
                    fetch_post();
                }
            })
        }
    });

    $(document).on('click', '.repost', function(){
        var post_id = $(this).data('post_id');
        var action = 'repost';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{post_id:post_id, action:action},
            success:function(data)
            {
                alert(data);
                fetch_post();
            }
        })
    });
 
});  
</script>
