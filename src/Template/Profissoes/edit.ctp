
<fieldset>
    <div class="container col-8">
        <?= $this->Form->create($profisso) ?>
        <div class="form-group mt-4 ">
            <?php echo $this->Form->control('profissao',['class' => 'form-control', 'label' => 'Profissão']); ?>
        </div>
        <?php echo $this->Form->button(__('Editar'), ['class' =>'btn btn-warning color-dark']);?>
        <?php echo $this->Html->link(__('Voltar'), ['action'=>'index'],['class' =>'btn btn-info color-dark'])?>
    </div>
</fieldset>
