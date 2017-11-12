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
  this.handleEvents();
}

Modal.prototype.initialize = function(el){
  this.$el = $(el);
  this.$modal = $('.js-modal');
  this.$overlay = $('.js-modal-overlay');
  this.$closeBtn = $('.js-modal-close-btn');
}

Modal.prototype.handleEvents = function(){
  var self = this;

  var event = 'ontouchstart' in window ? 'touchstart' : 'click';
  
  this.$el.on(event, function(event){
    event.preventDefault();
    var $target = self.$el.attr('href');
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

Modal.prototype.modalFadeIn = function(target){
  $(target).addClass('is-fadein');
}

Modal.prototype.modalFadeOut = function(){
  var self = this;

  this.$modal.addClass('is-fadeout');

  setTimeout(function(){
    self.modalFadeReset();
  },600);
}

Modal.prototype.modalFadeReset = function(){
  this.$modal.removeClass('is-fadein');
  this.$modal.removeClass('is-fadeout');
}