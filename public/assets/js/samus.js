// $(function(){
//   var samus = $('#samus');
//   var window_W = window.innerWidth;
//   var ballDefault = {
//     r:10,
//     x:20,
//     y:10
//   };
//   var ball = {
//     r:10,
//     x:20,
//     y:10
//   };

//   function render(ball,samus)
//   {
//     samus.css({
//       width: ball.r,
//       height: ball.r,
//       top:ball.y,
//       right: ball.x,
//     });
//   }
//   render(ball,samus);

//   function reset()
//   {
//     $.extend(ball, ballDefault);
//     render(ball,samus);
//   }

//   samus.on('mousedown',function(e){
//     if( e.button === 0 ){
//       sizeInterval = setInterval(
//         function(){
//           ball.r = ball.r + 2;
//           render(ball,samus);
//         },20
//       );
//     }
//   });
//   $(window).on('mouseup',function(e){
//     if( e.button === 0 ){
//       clearInterval(sizeInterval);
//       launch();
//     }
//   });
//   function launch()
//   {
//     moveIneterval = setInterval(
//       function(){
//         ball.x = ball.x + 20;
//         render(ball,samus);

//         // 画面をはみ出すと停止
//         if ( ball.x > window_W ) {
//           reset();
//           clearInterval(moveIneterval);
//         }
//       },20);
//   }
// });

(function($) {
  $.fn.samus = function(config) {
    var Ball;
    config = config || {};

    Ball = (function(){
      Ball.W = window.innerWidth;
      Ball.time = 20;
      Ball.speed = 10;
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
          console.log('render');
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
          console.log('reset');
          this.param = $.extend({},this.defaults);
          this.render();
        },

        launch: function(e){
          console.log('launch');
          if ( !this.heaping ) return;
          this.heaping = false;

          clearInterval(this.sizeId);

          moveID = setInterval($.proxy(function(){
            this.param.x = this.param.x + Ball.speed;
            this.render();

            if ( this.param.x + this.param.r * 0.5 > Ball.W) {
              $('body').addClass('bbb');
              clearInterval(moveID);
              this.reset();
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
