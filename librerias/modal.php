<div id="modal" class="modal">

    <div class="modal-content">
    
        <div class="modal-header">
        	<span>AVISO</span>
        	<a class="close"><i class="fa fa-times"></i></a>
        </div>
        
        <div class="modal-body">
        	<div><p><?php if(isset($estado)){echo $estado;}?></p></div>
        	
        	
        	<!-- div>
            	<button id="si" name="si" value="1">Si</button>
            	<button class="cancelar" name="cancelar" value="0">Cancelar</button>
        	</div-->
        	
        </div>
           
    </div>
</div>

<script>
    $(document).ready(function() {
    	$('.close').on('click', function() {
    		$('#modal').hide();
    	});
    	
    	$('.no').on('click', function() {
    		$('#modal').hide();
    	});
    
    	$('.cancelar').on('click', function() {
    		$('#modal').hide();
    	});
    });
</script>