<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Add smooth scrolling by using Jquery Animate method</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
           body{  
                height:3000px;  
           }  
           #top{  
                position:fixed;  
                bottom:20px;  
                right:20px;  
                display:none;  
           }  
           </style>  
           <script>  
           $(document).ready(function(){  
                $('a[href^="#"]').on('click', function(e){  
                     e.preventDefault();  
                     var target = this.hash;  
                     var $target = $(target);  
                     $('html, body').animate({  
                          'scrollTop':$target.offset().top  
                     }, 1000, 'swing');  
                });  
           });  
           $(function(){  
                $(window).scroll(function(){  
                     if($(this).scrollTop() != 0)  
                     {  
                          $('#top').fadeIn();  
                     }  
                     else  
                     {  
                          $('#top').fadeOut();  
                     }  
                });  
                $('#top').click(function(){  
                     $('body,html').animate({scrollTop:0},500);  
                });  
           })  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <ul class="list-unstyled">  
                     <li><a href="#first">First</a></li>  
                     <li><a href="#second">Second</a></li>  
                     <li><a href="#third">Third</a></li>  
                     <li><a href="#fourth">Fourth</a></li>  
                     <li><a href="#fifth">Fifth</a></li>  
                </ul>  
                <br />  
                <br />  
                <div id="first">  
                     <h3>First</h3>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                </div>  
                <div id="second">  
                     <h3>Second</h3>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                </div>  
                <div id="third">  
                     <h3>Third</h3>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                </div>  
                <div id="fourth">  
                     <h3>Fourth</h3>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                </div>  
                <div id="fifth">  
                     <h3>Fifth</h3>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                     <p>Lorem ipsum dolor sit amet, vestibulum a dui erat quod, tincidunt praesent lobortis suspendisse. In adipiscing. Est vestibulum aliquam ac penatibus. Suspendisse at condimentum vulputate faucibus, laoreet proin nulla laoreet, sed phasellus sed elit enim non. Velit arcu facilisis vitae. Amet tristique placerat in, curabitur magna praesent sodales.</p>  
                </div>  
                <button type="button" class="btn btn-info" id="top">Top</button>  
           </div>  
      </body>  
 </html> 