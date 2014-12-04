<div class="wrap">
<div class="icon32"><img src='<?php echo plugins_url('/images/icon-32.png', dirname(__FILE__))?>' /></div>
        
<h2>Hot Login</h2>
    
  		<table width="100%"><tr>

        <td style="vertical-align:top">
 
 		<form action="" method="post" class="form-table">
        		<?php
                 wp_nonce_field('update',self::CLASS_NAME);
				?>
                
                <h2>Configurações do Hotconnect</h2>
        <div class="metabox-holder">         
		<div class="postbox" >
        
        	<div class="inside">
            
            	<table>
                <tr>
            	
                <th scope="row">
                <label>ID da Aplicação</label>
                </th >
                <td>
                <input type="text" name="app_id" value="<?php echo $options['app_id']?>" class="regular-text" /> <p class="description">( Digite o ID da aplicação criada no Hotmart )</p>
                </td>
                </tr>
                <tr>
                <th scope="row">
                 <label>Código Secreto da Aplicação</label>
                 </th>
                 <td>
                 <input type="text" name="app_secret" class="regular-text" value="<?php echo $options['app_secret']?>" /><p class="description">( Digite o Código Secreto da Aplicação )</p>
                </td>
                </tr>
                <tr>
                <th scope="row">
                <label>ID do Produto</label>
                </th>
                <td><input type="text" name="id_produto" size="20" value="<?php echo $options['id_produto']?>" /> <p class="description">( Digite o ID do seu Produto )</p>
                </td>
                </tr>
                </table>
               
                <input type="submit" name="submit" value="Salvar Todas as Alterações" class="button-primary" />
                
                

			</div>
		</div>
        </div>
			
            <h2>Outras Configurações</h2>

        <div class="metabox-holder">         
		<div class="postbox" >
        
        	<div class="inside">
            
            	<table>
                <tr>
            	
                <th scope="row">
                <label>Página Inicial do Comprador</label>
                </th >
                <td>
                <input type="text" name="pagina_inicial" value="<?php echo $options['pagina_inicial']?>" class="regular-text" /> <p class="description">( Digite o URL da página Inicial que deve ser exibida ao comprador após ele fazer Login )</p>
                </td>
                </tr>
                <tr>
            	
                <th scope="row">
                <label>Restrições de Acesso</label>
                </th >
                <td>
                <label>Só Membros Poderão Acessar</label>
                <select name="restricoes" >
                	<option value="1" <?php selected(1,$options["restricoes"])?>>Todos os Posts</option>
                    <option value="2" <?php selected(2,$options["restricoes"])?>>Todas as Páginas</option>
                    <option value="3" <?php selected(3,$options["restricoes"])?>>Desativar Restrições</option>
                </select>
                </td>
                </tr>   
                <tr>
            	
                <th scope="row">
                <label>Nível do Usuário</label>
                </th >
                <td>
                <label>Usuários Cadastrados pelo Plugin Serão</label>
                <select name="tipo_usuario" >
                	<option value="subscriber" <?php selected("subscriber",$options["tipo_usuario"])?>>Inscritos (Recomendado)</option>
                    <option value="contributor" <?php selected("contributor",$options["tipo_usuario"])?>>Contribuidores</option>
                    <option value="author" <?php selected("author",$options["tipo_usuario"])?>>Autores</option>
                    <option value="editor" <?php selected("editor",$options["tipo_usuario"])?>>Editores</option>
                </select>
                </td>
                </tr>                             
                </table>
               
                <input type="submit" name="submit" value="Salvar Todas as Alterações" class="button-primary" />
                
                

			</div>
		</div>
        </div>
        
                
        </form>
          
   		</td>
        <td style="vertical-align:top; width:410px">



         <div class="metabox-holder">

		<div class="postbox" >    
        
      		 <h3 style="font-size:24px; text-transform:uppercase;color:#F00;">

        	Gostou do Plugin? Fique Atualizado!

            </h3>       

            <h3>Cadastre seu Email e Seja o primeiro a ficar sabendo sobre novos plugins meus Grátis</a></h3>

            

        	<div class="inside">

                <p>

                <!-- BEGIN TrafficWave.net AutoResponder Capture Form - BUILD 090412-->
                <div id="TRWVLCPDiv" style="text-align: left; width: 400px;"><form id="TRWVLCPForm" name="TRWVLCPForm" method="POST" action="http://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi" target="_blank"><input type=hidden name="trwvid" value="ganhardinheiro"><input type=hidden name="series" value="dosplugins"><input type=hidden name="subscrLandingURL" value=""><input type=hidden name="confirmLandingURL" value=""><table class="LCPdataForm" style="width: 100%;"><tr><td width=25% ></td><td ><input id="da_name" name="da_name" value="amigo" type=hidden style="width: 100%"></td></tr> <tr><td width=25% >Seu Email</td><td ><input id="da_email" name="da_email" type=text style="width: 100%" placeholder="... Seu Email Aqui" required="required"></td></tr> </table><input type="submit" id="TRWVSubM"  value="Quero Receber" class="button-primary" /></form><div align="center" style="font-size: 11px; padding:2px;"><a href="http://www.trafficwave.net/members/ganhardinheiro" target="_blank" rel="external nofollow" title="Email Marketing">Email Marketing by TrafficW</a></div></div>
                
                <!-- END TrafficWave.net AR Capture Form - BUILD 090412-->


				</p>



			</div> 

                        

		</div>

        </div>
        
        
        <div class="metabox-holder">

		<div class="postbox" >

        

        	<h3 style="font-size:24px; text-transform:uppercase;color:#F00;">

        	Pague 1, Leve 87!

            </h3>

            

             <h3>Super Pacote de Temas Premium: <a href="http://plugin-wp.net/elegantthemes" target="_blank">Elegant Themes</a></h3>

             

        	<div class="inside">

                <p>

                <a href="http://plugin-wp.net/elegantthemes" target="_blank"><img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/elegantthemes.jpg" ></a>

				</p>

				<a href="http://plugin-wp.net/elegantthemes" target="_blank" class="button-primary" rel="external nofollow" >Quero Conhecer</a>
				

			</div>

 
 		</div>
        </div>
        


              

       </td>
       </tr>
       </table>


<hr />


<table>
<tr>
<td>
<img src="<?php echo $anderson_makiyama[self::PLUGIN_ID]->plugin_url?>images/anderson-makiyama.png" />
</td>
<td>
<ul>

<li>Autor: <strong>Anderson Makiyama</strong>

</li>

<li>Email do Autor: <a href="mailto:andersonmaki@gmail.com" target="_blank">andersonmaki@gmail.com</a>

</li>

<li>Página do Plugin: <a href="<?php echo self::PLUGIN_PAGE?>" target="_blank"><?php echo self::PLUGIN_PAGE?></a>

</li>

<li>

Página do Autor: <a href="http://ganhardinheiroblog.net" target="_blank">Ganhar Dinheiro Blog</a>

</li>

</ul>
</td>
</tr>
</table>

</div>