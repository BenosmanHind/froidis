@extends('layouts.front')
@section('content')
<style>
    .overflow-section{
    line-height: 1.5 !important;
    height: 4.5em !important;
    overflow: hidden !important;
}
.page-banner-content ul li {
    color: #fff !important;
}
</style>
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2> Contact</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Contact
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Contact Section ===-->
<div class="contact-section ptb-100">
    <div class="container">
        <div class="contact-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form ptb-100">
                        <h2>Nous sommes toujours prêts à vous aider.</h2>

                        <form class="form-contact">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nom complet" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Téléphone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="main-btn">
                                        <span>Envoyer</span>
                                    </button>
                                </div>
                                <div id="show_contact_msg">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19042.643119611235!2d-1.3872223498171883!3d34.94498966875852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78c849435dd907%3A0xe3b7ec41771a2f7c!2sFROIDIS%20REFRIG%C3%89RATION%20-%20Si%C3%A8ge%20Social!5e0!3m2!1sfr!2sdz!4v1718022439177!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Contact Section ===-->
@endsection
@push('contact-script')

<script>
    $(document).ready(function(){
        $('.form-contact').on('submit', function(e){
            e.preventDefault();
            $('#show_contact_msg').html('<div >En cours....</div>');
            $.ajax({
                url: '/contact',
                method: 'POST',
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response){
                    $('#show_contact_msg').html('<div class="alert alert-success flash-alert mt-2" id="form-success" role="alert"> Votre messgae à été bien envoyer !</div>');
                    $(".flash-alert").slideDown(200).delay(3500).slideUp(200);
                    $('.form-contact')[0].reset();
                },
                error: function(xhr){
                    alert('Une erreur est survenue, veuillez réessayer.');
                }
            });
        });
    });
    </script>
@endpush
