<div class="modal-titulo">
	Adicionar Espaço
</div>
<div class="modal-form">
	<!--formulário-->
	<form id="form-espaco-adicionar">

		<div class="label-float">
	        <input type="text" id="input_descricao" name="input_descricao" placeholder=" "/>
	        <label>Espaço</label>
	    </div>

	    <div class="label-btn">
	    	<button class="btn-modal btn-save"  onclick="adicionarForm('<?= base_url('espaco/formulario/adicionar'); ?>','#form-espaco-adicionar'); return false;"><i class="far fa-save"></i> Salvar</button>
	    	<button class="btn-modal btn-cancel" onclick="fecharModal();"><i class="fas fa-times"></i> Fechar</button>
	    </div>

	</form>
</div>