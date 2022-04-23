<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vera Confecções</title>
    <meta name="keywords" content="costura, molde, consertor, roupas" />
	  <meta name="Vera Confecções" content="veraconfeccao" />
    <link rel="icon" type="image/x-icon" href="imagem4.png" />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- STYLES -->
    <link rel="stylesheet" href="estilo.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header id="header">
      <nav class="container">
        <a class="logo" href="#">Vera<span>Confecções</span>!</a>
        <!-- menu -->
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#testimonials">Depoimentos</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
            <li><a class="title" href="#forms">Formulário</a></li>
          </ul>
        </div>
        <!-- /menu -->
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>

    <main>
      <!-- HOME -->
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
            <img class="tesoura"
              src="tesoura.jpeg"
              alt="tesoura"
            />
          </div>
          <div class="text">
            <h2 class="title">Confeção e Consertos de Roupas</h2>
            <p>
              Costureira que trabalha em Porto Alegre e na Região Metropolitana
              de Porto Alegre, além de mandar frete para o estado inteiro!!!!
            </p>
            <a class="button" href="#contact">Agendar um horário</a>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- ABOUT -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img class="maquina"
              src="maquina3.jpg"
              alt="maquina"
            />
          </div>
          <div class="text">
            <h2 class="title">Sobre nós</h2>
            <p>
              <b>Experiencia de mais de 25 anos na costura!!!!Meu aprendizado veio
              através da minha mãe e minha avó, que me inseriram dentro do mundo
              da costura. Realizei cursos de Costura Industrial pelo SENAI</b>
            </p>
            <br />
            <p>
              <b>Fazemos diversos tipos de roupas, como por exemplo: vestidos,
              biquinis, shorts, biquinis, vestidos de casamento, calça masculina
              e feminina, ternos masculinos e femininos, bermudas, maiôs,
              shorts, além de fazer reparos em diversos tipos de roupas.</b>
            </p>
            <br />
            <p>
              <b>Trabalhamos com diversos tecidos, para construção de roupas,
              reparos e desenhos de peças.Temos atendimento personalizado,
              fazemos roupas para o seu estilo, do jeito que você gosta!
              Trabalhamos com cartão de débito, crédito, boleto, dinheiro e PIX!!!!</b>
            </p>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- SERVICES -->
      <section class="section" id="services">
        <div class="container grid">
          <header>
            <h2 class="title">Serviços</h2>
            <p class="subtitle">
              Trabalhamos com diversos tecidos, para construção de roupas,
              reparos e desenhos de peças.
            </p>
          </header>
          <div class="cards grid">
            <div class="card">
              <i class="icon-woman-hair"></i>
              <h3 class="title">Design</h3>
              <p>
                Desenhamos para você o modelo ideal para seu corpo, tanto para
                homens, mulheres, crianças e recém-nascidos.
              </p>
            </div>
            <div class="card">
              <i class="icon-trim"></i>
              <h3 class="title">Ajustes</h3>
              <p>
                Fazemos ajustes de roupas, como vestidos, calças jeans, calças
                sociais, biquinis, shorts, bermudas, vestidos de noiva, blusas
                masculinas e femininas e muitos outros serviços!
              </p>
            </div>
            <div class="card">
              <i class="icon-cosmetic"></i>
              <h3 class="title">Confecção</h3>
              <p>
                Através do layout que construímos para você, fazemos a confecção
                das roupas com exelência e qualidade para você! Venha fazer sua
                roupa sob medida com a Dona Vera!
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- TESTIMONIALS -->
      <section class="section" id="testimonials">
        <div class="container">
          <header>
            <h2 class="title">Depoimentos de quem já passou por aqui</h2>
          </header>
          <div class="testimonials swiper-container">
            <div class="swiper-wrapper">
              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    <b>Melhor costureira de Porto Alegre-RS! Se quiserem serviçoes
                    de confecções e concerto de roupas, contatem a Dona Vera!</b>
                  </p>
                  <cite>
                    <img src="foto3.jpeg" alt="Foto de Tamira" />
                    <b>Tamira Brasiliano Ferreira</b>
                  </cite>
                </blockquote>
              </div>

              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    <b>A Dona Vera tem um serviço maravilhoso! Super profissional e
                    simpática! Sempre quando tenho alguma peça para fazer, peço
                    a ela! Super indico!!!!</b>
                  </p>
                  <cite>
                    <img src="foto1.jpeg" alt="Foto de Felipe Todeschini" />
                    <b>Felipe Todeschini</b>
                  </cite>
                </blockquote>
              </div>

              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    <b>Fui super bem recebida e atendida pela Dona Vera! Ela tem um
                    serviço de excelente qualidade! Super indico o serviço dela
                    para corte e costura!</b>
                  </p>
                  <cite>
                    <img src="foto2.jpeg" alt="Foto de Silvana Maris" />
                    <b>Silvana Maris Todeschini</b>
                  </cite>
                </blockquote>
              </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

       <!-- CONTACT -->
       <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com a Vera Confecções, queremos tirar suas dúvidas,
              ouvir suas críticas e sugestões.
            </p>
            <a
              href="https://api.whatsapp.com/send?phone=+555197938679&text=Oi! Gostaria de fazer uma peça de roupa!"
              class="button"
              target="_blank"
              ><i class="icon-whatsapp"></i> Entrar em contato</a
            >
          </div>

          <div class="links">
            <ul class="grid">
              <li><i class="icon-phone"></i> (51) 97938679</li>
              <li><i class="icon-map-pin"></i> R. Bento Gonçalves</li>
              <li><i class="icon-mail"></i> tamira.rbf@gmail.com</li>
			  <li><i class="icon-mail"></i> todeschini1992@gmail.com</li>
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <div class="divider-1"></div>
       <!-- Formulário -->
	   <section class="section" id="forms">
      
	  
       <div class="container grid">
        <div class="text">
          <h2 class="title">Pesquisa de Opinião</h2>
          
		  
		  <?php
		if (isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
		
		?>
          <form method="post" action="dados.php">
          
           <fieldset>
			<legend>Cadastro de cliente:</legend>
				
				<label>Nome:</label>
				<input type="text" name="nome" required />
				<br>
				
				<label>Email:</label>
				<input type="email" name="email" required />
				<br>
              
             
              <h2>Qual a sua cidade: </h2>
              
                <select name="cidade">
                  <option value="inicio_tres">---------</option>
                  <option value="poa">Porto Alegre</option>
                  <option value="viamao">Viamão</option>
                  <option value="gravatai">Gravatai</option>
                  <option value="alvorada">Alvorada</option>
                  <option value="sapucaia">Sapucaia do Sul</option>
                  <option value="canoas">Canoas</option>
                  <option value="eldorado">Eldorado do Sul</option>
                  <option value="novohamburgo">Novo Hamburgo</option>
                </select>
              
                  
           
            <br>
            
            
             <h2>Informe a sua nota: </h2>
              
                <select name="notas">
                  <option value="inicio_nove">---------</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
				  <option value="9">9</option>
				  <option value="10">10</option>
                </select>
            
            
            
            <br>
            
            
      
      <h2>Como ficou sabendo dos nossos serviços?</h2>
      
     
				
				<input type="radio" name="servicos" value="Instagram" />Instagram
				<input type="radio" name="servicos" value="Facebook" />Facebook
				<input type="radio" name="servicos" value="Nossosite" />Nosso site
				<input type="radio" name="servicos" value="Indicacao" />Indicação
            
            <br>
			
            
             
                	
              
                  
          
              <input type="submit" value="Enviar"/>
			  <input type="reset" name="Limpar" value="Limpar"/>
        
			
			
          </fieldset>			
			  
          </form>
        
        </div>




        </div>
       
      </section>

  <div class="divider-1"></div>
    </main>

    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home">Vera<span>Confecções</span>!</a>
          <p>©2022 Vera Confecções</p>
          <p>Todos os direitos reservados.</p>
        </div>

        <div class="social grid">
          <a href="https://instagram.com" target="_blank">
            <i class="icon-instagram"></i>
          </a>
          <a href="https://facebook.com" target="_blank">
            <i class="icon-facebook"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="icon-youtube"></i
          ></a>
        </div>
      </div>
    </footer>

    <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main.js -->
    <script src="main.js"></script>
  </body>
</html>
