<form class="form p-4" method="POST" action="{{ route('confirm') }}" id="{{ $model->name }}">
{{ csrf_field() }} {{ method_field('POST') }}

<div class="modal-header">
    <h5 class="modal-title" id="modal-title">Beli {{$model->name}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        &times;
    </button>
</div>
<div class="modal-body">
    <input id="id" type="hidden" class="form-control" name="id" value="{{ $model->id }}" required>
    <div class="form-group">
        <label for="" class="control-label">Nama</label>
        <input id="name" type="text" class="form-control" name="name" placeholder="Cth: Syakir Yaqdhi" required>
    </div>
    <div class="form-group">
        <label for="" class="control-label">No Hp</label>
        <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder="Cth: 08120000812" phone_number required>
    </div>
    <div class="form-group">
        <label for="" class="control-label">Banyak Cicilan</label><br>
        &ensp; <input type="radio" id="installment" name="installment" value="1" checked> &ensp; 1x: &ensp;Rp {{ number_format($model->price, 0, ',', '.') }}<br>
        &ensp; <input type="radio" id="installment" name="installment" value="3"> &ensp; 3x: &ensp;Rp {{ number_format($model->price3, 0, ',', '.') }}<br>
        &ensp; <input type="radio" id="installment" name="installment" value="6"> &ensp; 6x: &ensp;Rp {{ number_format($model->price6, 0, ',', '.') }}<br>
        &ensp; <input type="radio" id="installment" name="installment" value="12">&ensp;12x: &ensp;Rp {{ number_format($model->price12, 0, ',', '.') }}
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary-temanwarung" data-dismiss="modal" id="modal-close">Batal</button>
    <button type="submit" class="btn btn-primary-temanwarung" id="modal-save">Beli via WhatsApp</button>
</div>

</form>