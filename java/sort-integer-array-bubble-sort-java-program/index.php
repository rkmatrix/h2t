<!DOCTYPE html><?php   define('ABSPATH',dirname(dirname(dirname(__FILE__))).'/lib/');      ?>
<html>
<head>
<title>How to sort an integer array, Bubble Sort in Java - How2Test</title>
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
              <li class="active">Bubble Sort - Java Program</li>
            </ol>
            <h2 class="post_titile">Bubble Sort - Java program to sort an integer array - Java Program</h2>
            <div class="single_page_content">
              <div class="post_commentbox"> <a href="http://www.how2test.com"><img src="http://www.how2test.com/images/h2t.jpg"></a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Java Programming</a> </div>
              <p>In Bubble sort algorithm we sort an unsorted array by starting from first element and comparing with adjacent element. If former is greater than later then we swap and by doing this we get the largest number at the end after first iteration. So in order to sort n elements you require n-1 iteration and almost n-1 comparison. For recap here is the logic for bubble sort sorting algorithm :</p>
<blockquote>
<p>1) start comparing a[0] to a[1]</p>
<p>2) if a[0] > a[1] then swap numbers e.g. a[0]=a[1] and a[1]=a[0]</p>
<p>3) compare a[1] to a[2] and repeat till you compare last pair</p>
<p>4) This is referred as one iteration and at the end of first iteration largest number is at last</p>
<p>5) repeat this comparison again starting from a[0] but this time going till second last pair only</p>

</blockquote>
<p>Let's see a Java program which implements bubble sort logic to sort unsorted integer array.</p>
<pre><code class="language-java">
import java.util.Arrays;

public class BubbleSort {

	public static void main(String args[]) {
		// Define any unsorted integer array.
		int[] unsortedArray = { 32, 39, 21, 45, 23, 3 };
		// Calling the method which performs bubble sort
		bubbleSort(unsortedArray);

	}

	/*
	 * In bubble sort we need n-1 iteration to sort n elements at end of first
	 * iteration largest number is sorted and subsequently numbers smaller than
	 * that.
	 */
	public static void bubbleSort(int[] unsortedArray) {
		System.out.println("unsorted array before sorting : " + Arrays.toString(unsortedArray));

		// Outer loop - need n-1 iteration to sort n elements
		for (int i = 0; i < unsortedArray.length - 1; i++) {

			// Inner loop to perform comparison and swapping between adjacent
			// numbers
			// After each iteration one index from last is sorted
			for (int j = 1; j < unsortedArray.length - i; j++) {

				// If current number is greater than swap those two
				if (unsortedArray[j - 1] > unsortedArray[j]) {
					int temp = unsortedArray[j];
					unsortedArray[j] = unsortedArray[j - 1];
					unsortedArray[j - 1] = temp;
				}
			}
			System.out.printf("Sort pattern after %d iteration : %s %n", i + 1, Arrays.toString(unsortedArray));
		}
	}
}
</code></pre>
                           <p>Result:</p>
                           <pre><code class="language-java">unsorted array before sorting : [32, 39, 21, 45, 23, 3]
Sort pattern after 1 iteration : [32, 21, 39, 23, 3, 45] 
Sort pattern after 2 iteration : [21, 32, 23, 3, 39, 45] 
Sort pattern after 3 iteration : [21, 23, 3, 32, 39, 45] 
Sort pattern after 4 iteration : [21, 3, 23, 32, 39, 45] 
Sort pattern after 5 iteration : [3, 21, 23, 32, 39, 45]
</code></pre>
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
			 <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.how2test.com/java/sort-integer-array-bubble-sort-java-program/"><i class="fa fa-facebook"></i>Facebook</a> 
			 <a class="twitter" href="https://twitter.com/home?status=http%3A//www.how2test.com/java/sort-integer-array-bubble-sort-java-program/"><i class="fa fa-twitter"></i>Twitter</a> 
			 <a class="googleplus" href="https://plus.google.com/share?url=http%3A//www.how2test.com/java/sort-integer-array-bubble-sort-java-program/"><i class="fa fa-google-plus"></i>Google+</a> 
			 <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.how2test.com/java/sort-integer-array-bubble-sort-java-program/&title=Bubble%20Sort%20using%20Java%20program&summary=&source="><i class="fa fa-linkedin"></i>LinkedIn</a>
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