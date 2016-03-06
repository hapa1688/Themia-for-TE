<?php $this->need('header.php'); ?> <header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>


  <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                href="#about">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

 <nav id="sidebar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

<?php $this->need('sidebar.php'); ?>

<?php if (isset($this->fields->fm)): ?>
<div class="post-header-cover
                    text-left
                    " style="background-image:url('<?php $this->fields->fm(); ?>');" data-behavior="3">
            
              <div class="post-header main-content-wrap text-left">
    
           <?php if (isset($this->fields->l)): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>
  	
        <span>in </span>
  <a class="category-link" > <?php $this->title() ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
            <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a>
<?php endif;?>
</div>
</div> </div><?php endif; ?>



   <div id="main" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>
                 class="
                        hasCoverMetaIn
                        ">



<article class="post" itemscope itemType="http://schema.org/BlogPosting">
    
<?php if (isset($this->fields->fm)): ?><?php else: ?>
<div class="post-header main-content-wrap text-left">
    
         <?php if (isset($this->fields->l)): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
    
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>

        <span>in </span>
        
    <a class="category-link" > <?php $this->title() ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
 <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>     
<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a>
<?php endif;?>
    
</div>
</div>
<?php endif; ?>    
        
    
    <div class="post-content markdown" itemprop="articleBody">
        <div class="main-content-wrap">
            <p><?php $this->content(); ?></p>
<?php if (isset($this->fields->t)): ?>
<div class="image-gallery">
        <div class="image-gallery-metabar">
            <span><?php $this->fields->t(); ?></span>
        </div>
        <div class="image-gallery-photos image-gallery-photos--thumbnail">
            
                    
                    
        <?php if (isset($this->fields->t1)): ?>       
             <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t1(); ?>" target="_blank" style="top: -168.5px;">
                        <img class="photo" src="<?php $this->fields->t1(); ?>" itemprop="image">
                    </a>
                </div>
             <?php endif; ?>   
                    
                    
                    
                
                    
                        <?php if (isset($this->fields->t2)): ?>    
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t2(); ?>" target="_blank" style="top: -31px;">
                        <img class="photo" src="<?php $this->fields->t2(); ?>" itemprop="image">
                    </a>
                </div>
            
                    
                       <?php endif; ?>   
                    
                
                    
                    <?php if (isset($this->fields->t3)): ?> 
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t3(); ?>" target="_blank" style="left: -18.9582px; top: -2.5px;">
                        <img class="photo" src="<?php $this->fields->t3(); ?>" itemprop="image" style="height: 328px; width: 584.916px;">
                    </a>
                </div>
            <?php endif; ?>   
                    
                    
                    
                
                    
                           <?php if (isset($this->fields->t4)): ?> 
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t4(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t4(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>
                 <?php endif; ?>   
                    
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t5)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t5(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t5(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>
            
                    
                    
                         <?php endif; ?>   
                
                    
                           <?php if (isset($this->fields->t6)): ?> 
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t6(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t6(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
                    
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t7)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t7(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t7(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>
            
                         <?php endif; ?>   
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t8)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t8(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t8(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
                    
                    
                    

       
                    
                       <?php if (isset($this->fields->t9)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t9(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t9(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
                    
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t10)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t10(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t10(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
        </div>
    </div><?php endif; ?> <?php if (isset($this->fields->t0)): ?> <p><?php $this->fields->t0(); ?></p><?php endif; ?>  
<?php if (isset($this->fields->mp3)): ?><p>
<div class="player white" src="<?php $this->fields->mp3(); ?>">
	
<?php if (isset($this->fields->lrc)): ?><?php $this->fields->lrc(); ?><?php endif; ?>
</div></p>
<?php endif; ?>
        </div>
    </div>
    <div class="post-footer main-content-wrap">
           <div class="post-footer-tags"> </div>
        <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action">
       <?php thePrev($this); ?> 
            
          
            </li>
            <li class="post-action">
                        <?php theNext($this); ?>
                 </li>
        </ul>
    </nav>
    <ul class="post-actions post-action-share">
        <li class="post-action hide-lg hide-md hide-sm">
            <a class="post-action-btn btn btn--default btn-open-shareoptions"  href="#btn-open-shareoptions">
                <i class="fa fa-share-alt"></i>
            </a>
        </li>
   <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Twitter" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Google+" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i>
            </a>
        </li>
       
     

         <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至新浪微博" href="http://www.jiathis.com/send/?webid=tsina&amp;appkey=&amp;uid=1850331&amp;url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>">
                <i class="fa fa-weibo"></i>
            </a>
        </li>

        
            <li class="post-action">
                <a class="post-action-btn btn btn--default" href="#disqus_thread">
                    <i class="fa fa-comment-o"></i>
                </a>
            </li>
        
        <li class="post-action">
            
                <a class="post-action-btn btn btn--default" href="#blog">
            
               <i class="fa fa-arrow-up"></i>
            </a>
        </li>
    </ul>
</div>
<div id="disqus_thread">
    <?php $this->need('comments.php'); ?>
</div>
        
    </div>
</article>



    <div id="bottom-bar" class="post-bottom-bar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

            
            
              
                    <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action"> 
              <?php thePrev($this); ?>
                
            </li>
 <li class="post-action">
                
            <?php theNext($this); ?>
                
               
              
            </li>
        </ul>
    </nav>
    <ul class="post-actions post-action-share">
         <li class="post-action hide-lg hide-md hide-sm">
            <a class="post-action-btn btn btn--default btn-open-shareoptions"  href="#btn-open-shareoptions">
                <i class="fa fa-share-alt"></i>
            </a>
        </li>
   <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Twitter" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Google+" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i>
            </a>
        </li>
       
  

         <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至新浪微博" href="http://www.jiathis.com/send/?webid=tsina&amp;appkey=&amp;uid=1850331&amp;url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>">
                <i class="fa fa-weibo"></i>
            </a>
        </li>

        
            <li class="post-action">
                <a class="post-action-btn btn btn--default" href="#disqus_thread">
                    <i class="fa fa-comment-o"></i>
                </a>
            </li>
        
        <li class="post-action">
            
                <a class="post-action-btn btn btn--default" href="#blog">
            
             <i class="fa fa-arrow-up"></i>
            </a>
        </li>
    </ul>
</div>


                </div>

 <div id="share-options-bar" class="share-options-bar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

                
    <ul class="share-options">
        <li class="share-option">
            <a class="share-option-btn" target="new" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i><span class="">Share on Google Plus</span>
            </a>
        </li>
        <li class="share-option">
            <a class="share-option-btn" target="new" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>">
                <i class="fa fa-facebook-official"></i><span>Share on Facebook</span>
            </a>
        </li>
        <li class="share-option">
            <a class="share-option-btn" target="new" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>">
                <i class="fa fa-twitter"></i><span>Share on Twitter</span>
            </a>
        </li>
    </ul>
</div>
<div id="share-options-mask" class="share-options-mask"></div>
                    

	<?php $this->need('footer.php'); ?>