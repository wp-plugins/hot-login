<div class="wrap">
<div class="icon32"><img src='<?php echo plugins_url('/images/icon-32.png', dirname(__FILE__))?>' /></div>
        
<h2>Relatório de Logins via Hotmart</h2>
    
  		<table width="100%"><tr>
        <td style="vertical-align:top">

        <div class="metabox-holder">         
		<div class="postbox" >
        	<h3>Últimos 1000 Logins</h3>
        
        	<div class="inside">
            
            <label>Nome&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Data e Horário&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Status</label>
            
                <p>
                <select name="last_logins" size="10" multiple="multiple" >
                	<?php
					$nenhum_login = true;
					foreach($last_100_logins as $login):
						$nenhum_login = false;
					?>
                    <option><?php echo implode("&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;",$login)?></option>
                    <?php
					endforeach;
					
					if($nenhum_login) echo "<option>Nenhum usuário fez login via Hotconnect Ainda!</option>";
					?>
                </select>
                </p>

			</div>
		</div>
        </div>
 
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