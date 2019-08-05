source: https://www.tutorialrepublic.com/codelab.php?topic=faq&file=jquery-add-read-more-link-at-the-end-of-a-paragraph
https://www.tutorialrepublic.com/faq/show-read-more-link-if-the-text-exceeds-a-certain-length-using-jquery.php

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery Add Read More Link</title>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            var maxLength = 300;
            $(".show-read-more").each(function(){
                var myStr = $(this).text();
                if($.trim(myStr).length > maxLength){
                    var newStr = myStr.substring(0, maxLength);
                    var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                    $(this).empty().html(newStr);
                    $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
                    $(this).append('<span class="more-text">' + removedStr + '</span>');
                }
            });
            $(".read-more").click(function(){
                $(this).siblings(".more-text").contents().unwrap();
                $(this).remove();
            });
        });
	</script>
	<style type="text/css">
		.show-read-more .more-text{
			display: none;
		}
	</style>
</head>
<body>
<p class="show-read-more">Ut auctor velit sed consectetur rhoncus. Nunc dictum facilisis felis nec facilisis. Integer nec justo vitae orci cursus fermentum. Fusce semper, mi non tempus congue, velit leo efficitur quam, laoreet venenatis libero felis et lacus. Pellentesque mattis hendrerit nisi gravida hendrerit. Mauris sagittis tincidunt scelerisque. Vivamus lectus erat, dictum et magna quis, iaculis finibus nisl. Aliquam quis ante odio. Etiam tincidunt tellus tristique turpis tincidunt, eget condimentum urna rutrum. Donec maximus consequat dolor, sit amet condimentum ipsum gravida ac. Etiam posuere tellus mauris, et dignissim nisl rutrum quis. Mauris tincidunt ante sed velit maximus, vel tincidunt leo imperdiet. Morbi nec lacus et metus semper porttitor. Sed pellentesque ex at pellentesque scelerisque. Aliquam placerat gravida tortor, in fermentum ante commodo quis. Etiam vehicula elementum quam. Aliquam eu augue eu lacus dignissim efficitur. Proin ex metus, ornare placerat nisi at, porta lobortis turpis. Praesent euismod nec nulla ultrices maximus. Vivamus imperdiet quam ac lobortis cursus. Nam dapibus ullamcorper magna vehicula aliquam. Vivamus hendrerit molestie neque. Ut interdum diam a purus ultrices facilisis. Suspendisse molestie tempor dolor, sed tristique enim sagittis vitae. Integer eu dignissim lectus, commodo efficitur metus. Morbi quis justo finibus, interdum sem quis, imperdiet tellus. Curabitur blandit vel magna nec elementum. Vivamus tempor, urna pharetra euismod euismod, elit elit tincidunt sem, ut consectetur arcu massa non diam. Etiam scelerisque nisi magna. Nulla facilisi. Sed pharetra nunc lectus, in maximus dolor ornare sit amet.</p>
<p>Etiam posuere tellus mauris, et dignissim nisl rutrum quis. Mauris tincidunt ante sed velit maximus, vel tincidunt leo imperdiet. Morbi nec lacus et metus semper porttitor. Sed pellentesque ex at pellentesque scelerisque. Aliquam placerat gravida tortor, in fermentum ante commodo quis. Etiam vehicula elementum quam. Aliquam eu augue eu lacus dignissim efficitur. Proin ex metus, ornare placerat nisi at, porta lobortis turpis.</p>
<p>Praesent euismod nec nulla ultrices maximus. Vivamus imperdiet quam ac lobortis cursus. Nam dapibus ullamcorper magna vehicula aliquam. Vivamus hendrerit molestie neque. Ut interdum diam a purus ultrices facilisis. Suspendisse molestie tempor dolor, sed tristique enim sagittis vitae. Integer eu dignissim lectus, commodo efficitur metus. Morbi quis justo finibus, interdum sem quis, imperdiet tellus. Curabitur blandit vel magna nec elementum. Vivamus tempor, urna pharetra euismod euismod, elit elit tincidunt sem, ut consectetur arcu massa non diam. Etiam scelerisque nisi magna. Nulla facilisi. Sed pharetra nunc lectus, in maximus dolor ornare sit amet.</p>
</body>
</html>                            