 </div><!--end middle--> 	
      
      <footer>

            <ul>
            <li><strong>All contents &#169; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> . Web Design by <a href="http://edison.seattlecentral.edu/~cpetri02/web120/">Christina Petrie</a></strong></li>
            </ul>

	  </footer><!--END FOOTER-->		        		
	
	</div><!-- END WRAPPER -->
     
     <!-- begin validation buttons -->
            <p>
            <a href="http://validator.w3.org/check?uri=referer">
              <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
              width="31" height="32" alt="valid HTML5" />
             </a>
             <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
              <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
               alt="Valid CSS3" height="31" width="88" />
            </a>
            </p>
<!-- end validation buttons -->


  <?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
  <?php wp_footer(); ?> 
  </body>

</html>