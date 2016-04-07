jQuery(document).ready(function($){
/**
 * Tab
 */
 $('.js-tab-btn').on('click', function(event){
  event.preventDefault();
  var $this = $(this);

  $this.parent().siblings().removeClass('is-active').end().addClass('is-active');

    // コンテンツを切り替える
    var tabId = $this.data('tabid');
    $this.closest('.js-tab').find('.js-tab-body').each(function(){
      var $content = $(this);
      if($content.data('contentid') == tabId){
        $content.removeClass('is-hidden');
      }else{
        $content.addClass('is-hidden');
      }
    });
  });


/**
 * Drawer
 */
 $(".js-drawer").simpleDrawer({
  fixed: true,
  btnside: 'right',
  drawerside: 'right'
});



/**
 * modal
 */
 $('.js-modal-btn').each(function(){
  new Modal(this);
});

});



//　モーダル
////////////////////////////////////////////////////////////
function Modal(el){
  this.initialize(el);
  this.partsAppend();
  this.handleEvents();
}

Modal.prototype.initialize = function(el){
  this.$el = $(el);
  this.$modal = $('.js-modal');
  // this.$modalInner = this.$modal.children('.js-modal-body-inner');
  this.$overlayAppend = '<div class="js-modal-overlay c-modal__overlay"></div>';
  this.$closeBtn = $('.js-modal-close-btn');
  // this.$closeIconAppend = '<i class="js-modal-close-btn c-modal__close fa fa-times"></i>';
}

Modal.prototype.handleEvents = function(){
  var self = this;

  var event = 'ontouchstart' in window ? 'touchstart' : 'click';
  
  this.$el.on(event, function(event){
    event.preventDefault();
    var $target = self.$el.attr('href');
    if(!$($target).hasClass('js-modal-arrow')){
      self.modalPosition($target);
    }
    self.modalFadeIn($target);

    return false;
  });

  this.$overlay.on(event, function(event){
    self.modalFadeOut();

    return false;
  });

  this.$closeBtn.on(event, function(event){
    self.modalFadeOut();

    return false;
  });
}

Modal.prototype.modalPosition = function(target){
  var posY = $(window).scrollTop() + 80;
  $(target).css({top:posY});
}

Modal.prototype.modalFadeIn = function(target){
  this.$overlay.addClass('is-fadein');
  $(target).addClass('is-fadein');
}

Modal.prototype.modalFadeOut = function(){

  var self = this;

  this.$overlay.addClass('is-fadeout');
  this.$modal.addClass('is-fadeout');

  setTimeout(function(){
    self.modalFadeReset();
  },600);
}

Modal.prototype.modalFadeReset = function(){
  this.$overlay.removeClass('is-fadein');
  this.$modal.removeClass('is-fadein');
  this.$overlay.removeClass('is-fadeout');
  this.$modal.removeClass('is-fadeout');
}

Modal.prototype.partsAppend = function(){
  if($('.js-modal-overlay').length <= 0){
    $('body').append(this.$overlayAppend);
  }
  this.$overlay = $('.js-modal-overlay');
}