@extends('Layouts.app')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Ceritakan Pengalaman mu!</h3>
            <div class="card">
                <img src="{{ asset('assets/hotel/review.jpg') }}" class="card-img-top" alt="Padma Villa Ubud">
                <div class="card-body">
                    <h5 class="card-title">Padma Villa Ubud</h5>
                    <p class="card-text">Banjar Carik, Ubud, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="experienceRating">Bagaimana kamu menilai pengalamanmu?</label><br/>
                    <div class="star-rating" id="rating-pengalaman">
                        <s><s><s><s><s></s></s></s></s></s>
                    </div>
                </div>
                <div class="form-group">
                    <label for="visitDate">Kapan kamu pergi?</label>
                    <select class="form-control" id="visitDate">
                        <option>Tanggal Berkunjung</option>
                        <!-- Other options -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="purpose">Apa tujuan perjalanannmu?</label>
                    <div id="purpose">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option1" autocomplete="off"> Bisnis
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Liburan Keluarga
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Solo Trip
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option4" autocomplete="off"> Bulan Madu
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option5" autocomplete="off"> Dengan Teman
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="reviewText">Tulis Reviewmu disini</label>
                    <textarea class="form-control" id="reviewText" rows="3" placeholder="Tulis pengalaman serumu disini..."></textarea>
                </div>
                <div class="form-group">
                    <label for="reviewTitle">Judul Review</label>
                    <input type="text" class="form-control" id="reviewTitle" placeholder="Tulis judul reviewmu disini...">
                </div>
                <div class="form-group">
                    <label for="reviewPhoto">Tambahkan foto (optional)</label>
                    <input type="file" class="form-control-file" id="reviewPhoto">
                </div>
                <button type="button" class="btn btn-danger" onclick="window.location.href='review-form2.html'">Continue</button>
            </form>
        </div>
    </div>
</div>
@endsection
