<div class="form-group">
    {!! Form::label('to','Para:') !!}
    {!! Form::email('to',null,['class'=>'form-control','id'=>'to','tabindex'=>'1','placeholder'=>'email@dominio.com']) !!}
    <div class="field-options">
        <a href="javascript:;" v-on:click="clickButton($event, 'cc')" title="Cópia" id="cc-show">CC</a>
        <a href="javascript:;" v-on:click="clickButton($event, 'bcc')" title="Cópia Oculta" id="bcc-show">BCC</a>
    </div>
</div>
<div class="form-group" v-bind:class="{ 'hidden': hiddenCC }">
    {!! Form::label('cc','Cópia:') !!}
    {!! Form::email('cc',null,['class'=>'form-control','id'=>'cc','tabindex'=>'2','placeholder'=>'email@dominio.com']) !!}
    <div class="field-options">
        <a href="javascript:;" v-on:click="clickButton($event, 'cc')" title="Excluir" class="danger"><i class="entypo-cancel"></i></a>
    </div>
</div>
<div class="form-group" v-bind:class="{ 'hidden': hiddenBCC }">
    {!! Form::label('bcc','Cópia Oculta:') !!}
    {!! Form::email('bcc',null,['class'=>'form-control','id'=>'bcc','tabindex'=>'3','placeholder'=>'email@dominio.com']) !!}
    <div class="field-options">
        <a href="javascript:;" v-on:click="hide" title="Excluir" class="danger"><i class="entypo-cancel"></i></a>
    </div>
</div>
<div class="form-group">
    {!! Form::label('subject','Assunto:') !!}
    {!! Form::text('subject',null,['class'=>'form-control','id'=>'subject','tabindex'=>'4']) !!}
</div>
<div class="compose-message-editor">
    {!! Form::textarea('message',null,['class'=>'form-control wysihtml5','data-stylesheet-url'=>asset('assets/dashboard/wysihtml5/wysihtml5-color.css'),'id'=>'sample_wysiwyg']) !!}
</div>