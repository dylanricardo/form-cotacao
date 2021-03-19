<?php
/**
 * Template Name: Email (Neve)
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Neve
 */

/*get_header();*/

if( isset($_POST) )
{
	$to = 'dylan@criamosseusite.com.br';

	$subject = 'Website Change Request';

	$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
	$headers .= "CC: djdylol@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr><td><strong>range preço</strong> </td><td> Min: " . $_POST['preco-min'] . " Max: " . $_POST['preco-max'] . "</td></tr>";
	$message .= "<tr><td><strong>Tipo de serviço</strong> </td><td>" . $_POST['tipo_servico'] . "</td></tr>";
	$message .= (isset($_POST['name']) ? "<tr><td><strong>name</strong> </td><td>X</td></tr>" : "<tr><td><strong>name</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['tipo_servico']) ? "<tr><td><strong>tipo_servico</strong> </td><td>X</td></tr>" : "<tr><td><strong>tipo_servico</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['tipo_servico']) ? "<tr><td><strong>tipo_servico</strong> </td><td>X</td></tr>" : "<tr><td><strong>tipo_servico</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['tipo_servico']) ? "<tr><td><strong>tipo_servico</strong> </td><td>X</td></tr>" : "<tr><td><strong>tipo_servico</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['dominio']) ? "<tr><td><strong>dominio</strong> </td><td>X</td></tr>" : "<tr><td><strong>dominio</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['hospedagem']) ? "<tr><td><strong>hospedagem</strong> </td><td>X</td></tr>" : "<tr><td><strong>hospedagem</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['email']) ? "<tr><td><strong>email</strong> </td><td>X</td></tr>" : "<tr><td><strong>email</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['conteudo']) ? "<tr><td><strong>conteudo</strong> </td><td>X</td></tr>" : "<tr><td><strong>conteudo</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['home']) ? "<tr><td><strong>home</strong> </td><td>X</td></tr>" : "<tr><td><strong>home</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['page_quem']) ? "<tr><td><strong>page_quem</strong> </td><td>X</td></tr>" : "<tr><td><strong>page_quem</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['page_esp']) ? "<tr><td><strong>page_esp</strong> </td><td>X</td></tr>" : "<tr><td><strong>page_esp</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['page_serv']) ? "<tr><td><strong>page_serv</strong> </td><td>X</td></tr>" : "<tr><td><strong>page_serv</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['page_port']) ? "<tr><td><strong>page_port</strong> </td><td>X</td></tr>" : "<tr><td><strong>page_port</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['page_blog']) ? "<tr><td><strong>page_blog</strong> </td><td>X</td></tr>" : "<tr><td><strong>page_blog</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['page_outros']) ? "<tr><td><strong>page_outros</strong> </td><td>" . $_POST['Quantidade'] . "</td></tr>" : "<tr><td><strong>page_outros</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['newsletter']) ? "<tr><td><strong>newsletter</strong> </td><td>X</td></tr>" : "<tr><td><strong>newsletter</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['seo']) ? "<tr><td><strong>seo</strong> </td><td>X</td></tr>" : "<tr><td><strong>seo</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['form_contato']) ? "<tr><td><strong>form_contato</strong> </td><td>X</td></tr>" : "<tr><td><strong>form_contato</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['redes_sociais']) ? "<tr><td><strong>redes_sociais</strong> </td><td>X</td></tr>" : "<tr><td><strong>redes_sociais</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['video']) ? "<tr><td><strong>video</strong> </td><td>X</td></tr>" : "<tr><td><strong>video</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['linguas']) ? "<tr><td><strong>linguas</strong> </td><td>X</td></tr>" : "<tr><td><strong>linguas</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['venda']) ? "<tr><td><strong>venda</strong> </td><td>X</td></tr>" : "<tr><td><strong>venda</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['referencia']) ? "<tr><td><strong>referencia</strong> </td><td>" . $_POST['referencia'] . "</td></tr>" : "<tr><td><strong>referencia</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['adjetivos']) ? "<tr><td><strong>adjetivos</strong> </td><td>" . $_POST['adjetivos'] . "</td></tr>" : "<tr><td><strong>adjetivos</strong> </td><td>-</td></tr>");
	$message .= (isset($_POST['infos']) ? "<tr><td><strong>infos</strong> </td><td>" . $_POST['infos'] . "</td></tr>" : "<tr><td><strong>infos</strong> </td><td>-</td></tr>");
	$message .= "</table>";
	$message .= '</body></html>';
	mail($to, $subject, $message, $headers);
	header("Location: https://criamosseusite.com.br/");
	die();
} else {
	header("Location: https://criamosseusite.com.br/");
	die();
}