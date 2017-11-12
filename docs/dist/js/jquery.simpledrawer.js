(function($) {

  /**
   * [simpleDrawer]
   * @param  {[type]} el     [drawer オブジェクト]
   * @param  {[type]} option [プラグイン呼び出し時のオプション]
   */
   $.simpleDrawer = function(el, option){

    /**
     * [defaults デフォルト設定]
     */
     this.defaults = {
      btnside     : 'left',
      drawerside    : 'left',
      fixed       : true
    };


      /**
       * [elements クラスセレクタ定義]
       */
       this.elements = {
        btn       : '.c-drawer-btn',
        bar       : '.c-drawer-fixed-bar',
        drawer_inner  : '.c-drawer-inner',
        overlay     : '.c-drawer-overlay',
        wrapper     : '.c-drawer-wrapper'
      };


      /**
       * [setting this.defaultsをoptionで上書き]
       */
       this.setting = $.extend(this.defaults, option);

       this.initialize(el);
       this.handleEvents();

       if(this.setting.fixed == true){
        this.fixedBarOnScroll();
      }
      
    }
    $.extend($.simpleDrawer.prototype,{
      

    /**
     * [initialize 初期化]
     * @param  {[type]} el [drawer オブジェクト]
     */
     initialize : function(el){
      this.$el = $(el);
      this.$btn = $(this.elements.btn);
      this.$fixed_bar = $(this.elements.bar);
      this.$window = $(window);

      this.start_pos = 0;

      this.elementBtnSide();
      this.elementDrawerSide();
      this.drawerInnerHeight();
      this.drawerPartsAppend();
    },


        /**
         * [handleEvents タッチイベント]
         */
         handleEvents: function(){
          var self = this;
          var _touch = ('ontouchstart' in document) ? 'touchstart' : 'click';
          this.$btn.on(_touch, function(){
            if(self.$el.hasClass('is-open')){
              self.drawerSlideClose();
              self.wrapperScrollOff();
            }else{
              self.drawerSlideOpen();
              self.wrapperScrollOn();
            }
            return false;
          });

          this.$overlay.on(_touch, function(){
            self.drawerSlideClose();

            return false;
          });         
        },


        /**
         * [drawerSlideOpen ドロワーを開く]
         */
         drawerSlideOpen: function(){
          this.$el.addClass('is-open');
          this.$btn.addClass('is-open');
          this.$overlay.addClass('is-fadein');
          this.$fixed_bar.addClass('is-open');

          return false;
        },


    /**
     * [drawerSlideClose ドロワーを閉じる]
     */
     drawerSlideClose: function(){
      var self = this;

      this.$el.removeClass('is-open');
      this.$btn.removeClass('is-open');
      this.$overlay.removeClass('is-fadein');

      setTimeout(function(){
        self.$fixed_bar.removeClass('is-open');
      },300);

      return false;
    },


    /**
     * [drawerInnerHeight ドロワー内スクロール用の高さを算出]
     */
     drawerInnerHeight: function(){
      var $target = this.$el.children(this.elements.drawer_inner);
      var $target_height = $target.height();
      var $window_height = $(window).height();

      if($window_height < $target_height){
        $target.css('height', $window_height - 80);  
      }
    },
    

    /**
     * [drawerPartsAppend オーバーレイ追加]
     */
     drawerPartsAppend: function(){
      var overlaySlice = this.elements.overlay.substr(1);
      this.$overlayParts = '<div class="' + overlaySlice + ' c-drawer__overlay"></div>';

      if($(this.elements.overlay).length <= 0){
        $('body').append(this.$overlayParts);
      }
      this.$overlay = $(this.elements.overlay);
    },


    /**
     * [wrapperScrollOff メインコンテンツのスクロールを禁止 SP]
     */
     wrapperScrollOff: function(){
      $(this.setting.wrapper).on('touchmove.noScroll', function(e) {
        e.preventDefault();
      });
    },


    /**
     * [wrapperScrollOn メインコンテンツのスクロールを禁止解除 SP]
     */
     wrapperScrollOn: function(){
      $(this.elements.wrapper).off('.noScroll');
    },


    /**
     * [elementBtnSide settingのbtnsideの判定]
     */
     elementBtnSide: function(){
      if(this.setting.btnside == 'left'){
        this.$btn.addClass('is-left');

        return false;

      }else if(this.setting.btnside == 'right'){
        this.$btn.addClass('is-right');

        return false;

      }
    },


    /**
     * [elementDrawerSide settingのdrawersideの判定]
     */
     elementDrawerSide: function(){
      if(this.setting.drawerside == 'left'){
        this.$el.addClass('is-left');

        return false;

      }else if(this.setting.drawerside == 'right'){
        this.$el.addClass('is-right');

        return false;

      }
    },


    /**
     * [fixedBarOnScroll fixed-barのスクロール判定]
     */
     fixedBarOnScroll: function(){
      var self = this;
      var _touch = ('ontouchstart' in document) ? 'touchmove' : 'scroll';

      this.$window.on(_touch, function(){
        var $current_pos = $(window).scrollTop();

             // drawerが開いていたら動作しない
             if(!self.$btn.hasClass('is-open')){
              if($current_pos > 0){
                if ($current_pos > self.start_pos) {
                  self.fixedBarSlideOut();
                }else{
                  self.fixedBarSlideIn();
                }
              }else{
                self.fixedBarSlideIn();
              }
              self.start_pos = $current_pos;   
            }
          });
    },


    /**
     * [fixedBarSlideIn fixed-bar スライドイン]
     */
     fixedBarSlideIn: function(){
      this.$fixed_bar.removeClass('is-slideout');
    },



    /**
     * [fixedBarSlideOut fixed-bar スライドアウト]
     */
     fixedBarSlideOut: function(){
      this.$fixed_bar.addClass('is-slideout');
    }
  });


  /**
   * [simpleDrawer]
   * @param  {[type]} option [プラグイン呼び出し時のオプション]
   */
   $.fn.simpleDrawer = function(option) {
    return this.each(function() {
      new $.simpleDrawer(this, option);
    });
  };

})(jQuery);
