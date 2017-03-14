<!DOCTYPE html><?php   define('ABSPATH',dirname(dirname(dirname(__FILE__))).'/lib/');      ?>
<html>
<head>
<title>How to find duplicate characters in a string using java - How2Test</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="find duplicate characters in a string, duplicate characters, find duplicate"/>
<?php include(ABSPATH. 'header.html');?>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container no-padding">
 <?php include(ABSPATH. 'logo_menu.html');?>
  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
              <li><a href="http://www.how2test.com">Home</a></li>
              <li><a href="http://www.how2test.com/java/java-basic-tutorial">Java Tutorial</a></li>
              <li class="active">How to find duplicate characters in a string - Java Program</li>
            </ol>
            <h2 class="post_titile">How to find duplicate characters in a string - Java Program</h2>
            <div class="single_page_content">
              <div class="post_commentbox"> <a href="http://www.how2test.com"><img src="http://www.how2test.com/images/h2t.jpg"></a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Java Programming</a> </div>
              <p>Program to find duplicates characters in a string and display the number of occurance</p>
              <pre><code class="language-java">
import java.util.HashMap;
import java.util.Map;
import java.util.Set;

public class DuplicateCharInString {

	public void findDuplicateCharsInString(String str){
        
        Map<Character, Integer> duplicateMap = new HashMap<Character, Integer>();
        char[] chrArray = str.toCharArray();
        for(Character ch:chrArray){
            if(duplicateMap.containsKey(ch)){
                duplicateMap.put(ch, duplicateMap.get(ch)+1);
            } else {
                duplicateMap.put(ch, 1);
            }
        }
        Set<Character> keys = duplicateMap.keySet();
        for(Character ch:keys){
            if(duplicateMap.get(ch) > 1){
                System.out.println("Character '"+ch+"' occurs "+duplicateMap.get(ch)+" times in the string '"+ str + "'");
            }
        }
    }
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		DuplicateCharInString dupChar = new DuplicateCharInString();
		dupChar.findDuplicateCharsInString("I am a java programmer");
	}

}
</code>
</pre>
<p>Result:</p>
<pre><code class="language-java">Character ' ' occurs 4 times in the string 'I am a java programmer'
Character 'a' occurs 5 times in the string 'I am a java programmer'
Character 'r' occurs 3 times in the string 'I am a java programmer'
Character 'm' occurs 3 times in the string 'I am a java programmer'
</code>
</pre>
            </div>
          </div>
        </div>
        <div class="post_pagination">
          <div class="prev"> <a class="angle_left" href="#"><i class="fa fa-angle-double-left"></i></a>
            <div class="pagincontent"> <span>Previous Post</span> <a href="#">Check out the previous Article</a> </div>
          </div>
          <div class="next">
            <div class="pagincontent"> <span>Next Post</span> <a href="#">Check out the next Article</a> </div>
            <a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a> </div>
        </div>
        <div class="share_post"> 
			<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.how2test.com/java/how-to-find-duplicate-characters-in-a-string/"><i class="fa fa-facebook"></i>Facebook</a> 
			<a class="twitter" href="https://twitter.com/home?status=http%3A//www.how2test.com/java/how-to-find-duplicate-characters-in-a-string/"><i class="fa fa-twitter"></i>Twitter</a> 
			<a class="googleplus" href="https://plus.google.com/share?url=http%3A//www.how2test.com/java/how-to-find-duplicate-characters-in-a-string/"><i class="fa fa-google-plus"></i>Google+</a> 
			<a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.how2test.com/java/how-to-find-duplicate-characters-in-a-string/&title=Find%20duplicate%20characters%20in%20a%20string%20using%20java%20program&summary=&source="><i class="fa fa-linkedin"></i>LinkedIn</a>
		</div>
        <div class="similar_post">
          <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="small_catg similar_nav wow fadeInDown animated">
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="http://www.how2test.com/images/h2t_big.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Content to be uploaded.</a></h4>
                  <p></p>
                </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="http://www.how2test.com/images/h2t_big.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Content to be uploaded.</a></h4>
                  <p></p>
                </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="http://www.how2test.com/images/h2t_big.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Content to be uploaded.</a></h4>
                  <p></p>
                </div>
              </div>
            </li>
          </ul>
        </div>
		<?php include(ABSPATH. 'commentbox.html');?>
      </div>
      <?php include(ABSPATH. 'javaprograms.html');?>
    </div>
  </section>
</div>
<?php include(ABSPATH. 'footer.html');?>
</body>
</html>