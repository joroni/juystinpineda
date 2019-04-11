<div  ng-controller="pubCtrl">
  <section class="latest-blog-posts bg-whites pt60 pb60">
	<div class="container-fluid" >
		<div id="owl-demo-2" class="owl-carousel owl-theme">

			<article ng-repeat="p in myVMdata2" class="thumbnail item" >
			
				<div class="caption">
					<h4 itemprop="headline">
            {{p.title.rendered}}
          </h4>
					<p itemprop="text" class="flex-text text-muted">{{p.content.rendered | removeHTMLTags }}</p>
				</div>
			</article>

			
		</div><!-- #owl-demo-2 -->	
        <div class="customNavigation">
                                <span class="pager-left"><a class="btn btn-link prev"><span class="fa fa-chevron-left"></span></a></span>
                                <span class="pager-right"><a class="btn btn-link next"><span class="fa fa-chevron-right"></span></a></span>
                            </div>		
	
	</div>
</section>
</div>