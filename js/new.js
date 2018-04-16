/**
 * Created by bruno on 31/03/18.
 */
$( document ).ready(function() {
    var $seuCampoCpf = $("#cpf");
    var $data_form = $("#dtnasc");
    var $tel_form = $("#tel");
    $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    $data_form.mask("99/99/9999");
    $tel_form.mask("(99) 99999-9999");

});