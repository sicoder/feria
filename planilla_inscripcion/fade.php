<script>
var fadeEffect=function() {
  return{
    init:function(id, flag, target){
      this.elem = document.getElementById(id);
      clearInterval(this.elem.si);
      this.target = target ? target : flag ? 100 : 0;
      this.flag = flag || -1;
      this.alpha = this.elem.style.opacity ? parseFloat(this.elem.style.opacity) * 100 : 0;
      this.si = setInterval(function(){fadeEffect.tween()}, 20);
    },
    tween:function() {
      if(this.alpha == this.target){
        clearInterval(this.si);
      } else {
        var value = Math.round(this.alpha + ((this.target - this.alpha) * .05)) + (1 * this.flag);
        this.elem.style.opacity = value / 100;
        this.elem.style.filter = 'alpha(opacity=' + value + ')';
        this.alpha = value
      }
    }
  }
}();
</script>

<style>
  .divbotones {
    height:35px;
    margin:0 auto;
    width: 500px;
  }
  .elboton {
    background-color: #CCC;
    border: 1px solid #EEE;
    border-radius: 3px;
    color:#555;
    cursor:pointer;
    padding: 4px 0 5px;
    text-align:center;
    width:200px;
  }
  .elboton:hover {
    background-color: #D9D9D9;
    border: 1px solid #FFF;
    color: #333;
  }
  .sinodemos {
    background:#355C33;
    border:1px solid #548954;
    border-radius:3px;
    color:#79AF72;
    height:26px;
    margin-bottom:10px;
    padding:9px 10px 0;
    text-shadow:1px 1px #21341D;
  }
  #demoFADE {
    opacity:0;
    filter:alpha(opacity=0);
  }
</style>

<div id="demoFADE" class="sinodemos"> El elemento que está oculto. </div>


<button type='button' name='f1' id='f1' onclick="fadeEffect.init('demoFADE', 1)" > fade in</button>
<button type='button' name='f1' id='f1' onclick="fadeEffect.init('demoFADE', 0)" > out</button>