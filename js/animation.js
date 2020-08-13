var controller = new ScrollMagic.Controller({addIndicators: true});
var tween = new TweenMax.fromTo(
  ".Ti",
  1,
  { opacity:0 },
  { opacity:1 },);

var scene = new ScrollMagic.Scene({
  triggerElement: "#divt",
  triggerHook: "0.5",
  duration: "100%"
})
    .setTween(tween)
    .addTo(controller);