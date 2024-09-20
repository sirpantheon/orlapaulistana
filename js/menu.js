/*
Theme Name: Orla Paulistana
Theme URI: https://www.orlapaulistana.com.br
Author: João Eduardo Santos
Author URI: https://www.joaoeduardosantos.com.br
Description: Theme para o hotsite do empreendimento Orla Paulistana, de Global Realty Brasil - 2024
Version: 2.0.2
*/

/*INÍCIO COMUNS*/

body {
	font-family: Montserrat, Arial, sans-serif;
	font-weight: 500;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}

/*FIM COMUNS*/




/*INÍCIO HEADER*/
header{
	width: 100%;
	POSITION: absolute;
	top: 0;
	left: 0;
	z-index: 999;
}

header .logo-header{
	position: absolute;
	width: 11vw;
	left: 50%;
	margin-left: -5.5vw;
	top: 5.2vw;
}




/* INÍCIO BASE ENDERECO HEADER */

.base-endereco-header {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Alinha os itens ao início, já que não é uma barra de fora a fora */
    top: 8.3vw; /* Espaçamento interno */
     /* Removendo o fundo, caso seja necessário */
    position: absolute;
    left: 5.4vw;
    font-size: 0.715vw;
}

.base-endereco-header .endereco {
    font-weight: 500;
    color: #4b4747;
    display: flex;
    align-items: center;
}

.base-endereco-header .endereco .pin {
    width: 1vw;
    height: 0.9vw;
    background-image: url('/wp-content/themes/orlapaulistana/images/header/pin-endereco-dia.svg'); /* Ícone de localização */
    background-size: contain;
    background-repeat: no-repeat;
    margin-right: 0.2vw;
}

.base-endereco-header .google-maps {
    margin-left: 1vw; /* Espaço entre o endereço e o link do Google Maps */
    text-transform: uppercase;
    font-weight: 800;
}

.base-endereco-header .google-maps a {
    color: #1a73e8; /* Cor padrão do link */
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.base-endereco-header .google-maps a:hover {
    color: #0d47a1; /* Cor do link ao passar o mouse */
}

@media all and (max-width: 1024px) {
    .base-endereco-header {
        padding: 2vw;
        flex-direction: column; /* Em telas menores, o layout será em coluna */
        align-items: flex-start; /* Alinha o conteúdo à esquerda */
    }

    .base-endereco-header .endereco {
        font-size: 1.5vw;
        margin-bottom: 1vw;
    }

    .base-endereco-header .google-maps a {
    }
}

@media all and (max-width: 767px) {
    .base-endereco-header .endereco {
        
    }

    .base-endereco-header .google-maps a {
        
    }
}

/* FIM BASE ENDERECO HEADER */




/*-- INÍCIO BOTAO DIA NOITE HEADER*/
/* Estilo para o botão "Panorâmica" em resoluções largas */
.base-botao-dia-noite {
    margin-top: 7.5vw;
    text-align: right;
    position: relative;
    height: auto;
    right: 19.5vw;
}

.label-botao-dia-noite {
    text-transform: uppercase;
    font-size: 0.6vw;
    font-weight: 800;
    position: absolute;
    right: 5.5vw;
    top: 1.2vw;
    text-align: right;
}

.texto-botao-dia-noite {
    display: inline-flex;
    margin-right: 3.5vw;
    text-transform: uppercase;
    font-weight: 900;
    font-size: 0.70vw;
    margin-top: 1.5vw;
}

.toggle-switch {
    position: relative;
    width: 4.5vw;
    height: 2vw;
    float: right;
    z-index: 99999;
    top: 0.4vw;
    right: -1vw;
}

.toggle-checkbox {
    display: none;
}

.toggle-label {
    display: block;
    width: 100%;
    height: 100%;
    background-color: #eeeeee;
    border-radius: 1.35vw;
    position: relative;
    cursor: pointer;
    transition: background-color 0.3s, background-image 0.3s;
    overflow: hidden;
}

.toggle-inner {
    width: 100%;
    height: 100%;
    border-radius: 1.35vw;
    background-image: url(/wp-content/themes/orlapaulistana/images/header/bg-botao-dia.svg);
    background-position: 2.4vw center;
    background-repeat: no-repeat;
    background-size: auto 1.5vw;
    transition: background-image 0.3s, background-position 0.3s, background-size 0.3s;
}

.toggle-switch-handle {
    width: 1.4vw;
    height: 1.4vw;
    background-color: #4b4747;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 0.5vw;
    transform: translateY(-50%);
    transition: left 0.3s, background-color 0.3s;
}

.toggle-checkbox:checked + .toggle-label {
    background-color: #4b4747;
}

.toggle-checkbox:checked + .toggle-label .toggle-inner {
    background-image: url(/wp-content/themes/orlapaulistana/images/header/bg-botao-noite.svg);
    background-position: 0.5vw center;
    background-size: auto 1.5vw;
}

.toggle-checkbox:checked + .toggle-label .toggle-switch-handle {
    left: 2.6vw;
    background-color: #eeeeee;
}

/* Ajustes para resoluções de tela menores (Exemplo: tablets e celulares) */
@media (max-width: 1024px) {
    .base-botao-dia-noite {
        margin-top: 9.7vw;
        text-align: right;
        position: relative;
        height: 3vw;
    }

    .label-botao-dia-noite {
        font-size: 0.86vw;
        right: 10.2vw;
        top: 1.2vw;
    }

    .texto-botao-dia-noite {
        font-size: 0.70vw;
        margin-top: 1.5vw;
    }

    .toggle-switch {
        width: 6.5vw;
        height: 3.2vw;
    }

    .toggle-switch-handle {
        width: 1.9vw;
        height: 1.9vw;
    }

    .toggle-checkbox:checked + .toggle-label .toggle-inner {
        background-position: 2.1vw center;
        background-size: auto 4.2vw;
    }

    .toggle-checkbox:checked + .toggle-label .toggle-switch-handle {
        left: 4vw;
    }
}

@media all and (max-width: 767px) {
    .base-botao-dia-noite {
        width: 81vw;
        margin: 9.7vw auto 0 auto;
        text-align: right;
        position:relative;
        height: 9.8vw;
    }

    .label-botao-dia-noite {
        font-size: 1.54vw;
        right: 17.3vw;
        top: 2.1vw;
    }

    .toggle-switch {
        width: 11.2vw;
        height: 5.6vw;
    }

    .toggle-switch-handle {
        width: 3.5vw;
        height: 3.5vw;
    }

    .toggle-checkbox:checked + .toggle-label .toggle-inner {
        background-position: 5.6vw center;
        background-size: auto 4.2vw;
    }

    .toggle-checkbox:checked + .toggle-label .toggle-switch-handle {
        left: 7vw;
    }
}

/*-- FIM BOTAO DIA NOITE HEADER*/


/* INÍCIO MENU SANDUÍCHE */

.menu-sanduiche {
    position: absolute;
    top: 0;
    right: 5vw; /* Ajuste conforme necessário para alinhar à direita do botão panorâmica */
    z-index: 1000;
}

.menu-sanduiche button {
    background: none;
    border: none;
    cursor: pointer;
    width: 40px;
    height: 40px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-sanduiche button span {
    display: block;
    width: 30px;
    height: 4px;
    margin: 5px 0;
    background-color: #4b4747;
    transition: 0.4s;
}

/* Estilo das barrinhas para virar um X */
.menu-sanduiche.ativo button span:nth-child(1) {
    transform: rotate(45deg) translate(7px, 7px);
}

.menu-sanduiche.ativo button span:nth-child(2) {
    opacity: 0;
}

.menu-sanduiche.ativo button span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -7px);
}

/* Menu que será aberto */
#menu {
    position: absolute;
    top: 45px;
    right: 0;
    background-color: #f9f9f9;
    padding: 1vw;
    display: none; /* Oculto inicialmente */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

#menu a {
    display: block;
    color: #4b4747;
    text-decoration: none;
    padding: 0.5vw 0;
    font-size: 1vw;
    font-weight: 500;
}

#menu a:hover {
    color: #1a73e8;
}

/* Quando o menu estiver ativo */
.menu-sanduiche.ativo #menu {
    display: block;
}

/* FIM MENU SANDUÍCHE */



/*FIM HEADER*/




/*INÍCIO PANORÂMICAS DIA-NOITE*/


.base-panoramica{
	width: 100%;
	overflow: hidden;
	position: relative;
	margin: 0;
	text-align: center;
}



.texto-banner {
    align-items: center;
    text-align: center;
    position: absolute;
    width: 100%;
    top: 10.5vw;
    font-family: "Lexend Zetta", Arial, sans-serif;
    font-size: 1.17vw;
    font-weight: 400;
}


.foto-panoramica{
	width: 140vw;
	text-align: center;
}

/*FIM PANORÂMICAS DIA-NOITE*/



/*INÍCIO FAKE TESTES*/

 .fake-testes img {
	width: 100%;
	display: block;
}
		
.fake-testes{
	position: absolute;
	top: 0;
	left: 0;
	width: 100vw;
	z-index: 999;
	opacity: 0.5;
}
/*FIM FAKE TESTES*/


