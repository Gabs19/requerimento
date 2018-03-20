//Mask para telefone
      $(document).ready(function (){
        var $Tel = $('#tel');
        $Tel.mask('(00) 00000-0000?0');
      });

//Mask para CPF & RG

	$(document).ready(function (){
		var $CPF = $('#cpf');
		$CPF.mask('000.000.000-00')
	});

	$(document).ready(function (){
		var $rg = $('#rg');
		$rg.mask('0.000.000');
	});

	function validar(frm){
		if(frm.nome.value == "''" ||  frm.nome.value == null || frm.nome.value.lenght < 5){
			 alert("Por favor insira seu nome ");
			 frm.nome.focus();
			 return false;
		}
	}