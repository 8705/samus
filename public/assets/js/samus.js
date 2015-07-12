(function($) {
  $.fn.samus = function(config) {
    var Ball;
    config = config || {};

    Ball = (function(){
      Ball.W = window.innerWidth;
      Ball.time = 20;
      Ball.speed = 5;
      Ball.defaults = {
        r: 10,
        x: 50,
        y: 50,
        border: "#37D6EA",
        background: "#FFFFFF",
        shadow: 2,
      };

      function Ball($elm) {
        config        = config || {};
        this.heaping  = false;
        this.moving   = false;
        this.defaults = $.extend(Ball.defaults, config);
        this.param    = $.extend({},this.defaults);
        this.ball     = $elm;
        this.sizeID   = 0;
        this.render();

        // event listner
        $elm.on('mousedown', $.proxy(this.heap,this));
        $(window).on('mouseup', $.proxy(this.launch,this));
      }

      Ball.prototype = {

        render: function(){
          this.param.shadow = this.param.r * 0.2;
          this.ball.css({
            width:            this.param.r,
            height:           this.param.r,
            top:              this.param.y - this.param.r * 0.5,
            right:            this.param.x - this.param.r * 0.5,
            borderColor:      this.param.border,
            backgroundColor:  this.param.background,
            boxShadow: "#37D6EA 0px 0px "+this.param.shadow+"px,#37D6EA 0px 0px "+this.param.shadow+"px inset"
          });
        },

        reset: function(){
          this.param = $.extend({},this.defaults);
          this.render();
        },

        launch: function(e){
          if ( this.moving || !this.heaping) return;
          this.moving = true;

          clearInterval(this.sizeId);

          moveID = setInterval($.proxy(function(){
            this.param.x = this.param.x + Ball.speed;
            this.render();

            if ( this.param.x + this.param.r * 0.5 > Ball.W) {
              $('body').addClass('bbb');
              clearInterval(moveID);
              this.reset();
              this.heaping = false;
              this.moving = false;
            }
          }, this), Ball.time * 0.5);
        },

        heap: function(e){
          if( e.button === 0 ){
            if ( this.heaping ) return;
            this.heaping = true;
            $('body').removeClass('bbb');
            this.sizeId = setInterval($.proxy(
              function(){
                this.param.r = this.param.r + 0.2;
                this.render();
              },this),Ball.time);
          }
        }
      };

      return Ball;
    })();

    return this.each(function(){
      b = new Ball($(this));
      b.render();
    });
  };
})(jQuery);
