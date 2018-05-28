
<script type="text/javascript">
var modal=document.getElementId('wrapper');
var button= document.getElementId("mylink")
var span = document.getElementByClassName("close")[0];

btn.onclick = function(){
  modal.style.display = "block";
}

span.onclick = fuction(){
  modal.style.display = "none";

}

window.onclick = function(event){
  if(event.target== modal){
    modal.style.display = "none";
  }
}
</script>
