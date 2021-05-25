<div id="modal-conteudo-form">
	<div class="modal-titulo">
        Adicionar do Componente
        <button class="btn-modal-x btn-cancel" onclick="fecharModal();"><i class="fas fa-times"></i></button>
	</div>
    <div class="modal-scroll">
	<div class="modal-form">
		<!--formulário-->
		<form id="form-componente-adicionar">
			
			<div class="label-float-left">
                <!--componente tirar foto-->
                <div class="label-img" id="input-img">
                    <label for='p_foto_componente'>
                        <img src="<?= base_url('assets/images/img_error.png'); ?>" class="url-img">
                        Tirar Foto
                    </label>
                    
                    <input type="file" id="p_foto_componente" name="p_foto_componente" accept="image/*" capture="camera" value="" onchange="uploadImagem(this, '<?= base_url('componente/formulario/do_upload'); ?>'); return false;">
                    <input type="hidden" id="p_img_principal" name="p_img_principal" value="">
                </div>


            </div>

			<div class="label-float-right">
                <div class="label-box">
                    <div class="label-box-info">
                        <strong>Categoria</strong>
                        <?= $lista_item_categoria[0]['DESCRICAO']; ?>
                    </div>

                    <div class="label-box-info">
                        <strong>Item</strong>
                        <?= $lista_item[0]['DESCRICAO']; ?>
                        <input type="hidden" id="p_id_item" name="p_id_item" value="<?= $lista_item[0]['IDITEM']; ?>">
                    </div>

                    <div class="label-box-info">
                        <strong>Local</strong>
                        <?= $lista_espaco_local[0]['LOCAL']; ?>
                        <input type="hidden" id="p_id_espaco_local" name="p_id_espaco_local" value="<?= $lista_item[0]['IDESPACOLOCAL']; ?>">
                    </div>

                    <div class="label-box-info">
                        <strong>Status</strong>
                        <?= $lista_item_status[0]['DESCRICAO']; ?>
                        <input type="hidden" id="p_id_item_status" name="p_id_item_status" value="<?= $lista_item[0]['IDITEMSTATUS']; ?>">
                    </div>

                    <div class="label-box-info">
                        <strong>Grupo</strong>
                        <?= $lista_item_grupo[0]['DESCRICAO']; ?>
                    </div>
                </div>
            </div>
            
            <div class="label-float-box-left">
                <div class="label-float">
                    <input type="text" id="p_id_fabricante" name="p_id_fabricante" placeholder=" "/>
                    <label>Cod. Fabricante</label>
                </div>
            </div>
            
            <div class="label-float-box-right">
                <div class="label-float">
                    <input type="text" id="p_descricao" name="p_descricao" placeholder=" "/>
                    <label>Descrição</label>
                </div>
            </div>


            <div class="row-flex">
                <div class="row-box-item">
                    <div class="label-float">
                        <input type="text" id="p_id_acesso" name="p_id_acesso" placeholder=" "/>
                        <label>Acesso</label>
                    </div>
                </div>

                <div class="row-box-item">
                    <div class="label-float">
                        <input type="text" id="p_ch" name="p_ch" placeholder=" "/>
                        <label>Senha</label>
                    </div>
                </div>
                <div class="row-box-item">
                    <div class="label-float">
                        <input type="text" id="p_url" name="p_url" placeholder=" "/>
                        <label>URL</label>
                    </div>
                </div>
                <div class="row-box-item">
                    <div class="label-float">
                        <select id="p_ativo" name="p_ativo">
                            <option value="S"  selected="selected">SIM</option>
                            <option value="N">NÁO</option>
                        </select>   
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="label-float">
                    <input type="text" id="p_observacao" name="p_observacao" placeholder=" "/>
                    <label>Observação</label>
                </div>                
            </div>

			<div class="label-btn">
				<button class="btn-modal btn-save" onclick="adicionarForm('<?= base_url('componente/formulario/adicionar'); ?>','#form-componente-adicionar'); return false;"><i class="far fa-save"></i> Salvar</button>
			</div>

		</form>
	</div>
    </div>
</div>