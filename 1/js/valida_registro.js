with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && cliente.value==""){
			ok=false;
			alert("Debe escribir un nombre de cliente");
			cliente.focus();
		}
		if(ok &&trabajo_r.value==""){
			ok=false;
			alert("Debe indicar el trabajo realizado");
			trabajo_r.focus();
		}
		if(ok && datepicker_i.value==""){
			ok=false;
			alert("Debe escribir la fecha de inicio del trabajo");
			datepicker_i.focus();
		}
		if(ok && datepicker_t.value==""){
			ok=false;
			alert("Debe escribir la fecha de tarmino del trabajo");
			datepicker_t.focus();
		}
		if(ok && lider_b.value==""){
			ok=false;
			alert("Debe escribir la fecha de tarmino del trabajo");
			lider_b.focus();
		}
		if(ok && equipo_t.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			equipo_t.focus();
		}

		if(ok){ submit(); }
	}
}
