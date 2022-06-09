<!--Hedder Section-->
<section class="top_hedder" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12"> 
        <!--logo-->
        <div class="logo"> <img src="{{ asset('storage/views/templates/agents/assets/images/logo.png') }}" alt="Estate Responsive Landing Page Template"> </div>
        <!--logo--> 
        <!-- Hero Title -->
        <h1 class="main_titile"> CONTRATE UM CORRETOR DE IMÓVEIS </h1>
        <!-- Hero Title Close --> 
        
        <!-- Sub Hero Title -->
        <h2 class="sub_title"> QUEM VAI INVESTIR NO SEU SUCESSO </h2>
        <div id="underline"> <img src="{{ asset('storage/views/templates/agents/assets/images/underline.png') }}" alt="Estate Responsive Landing Page Template"> </div>
        
        <!-- Sub Hero Title Close --> 
      </div>
      
      <!-- Agent Pic -->
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"> 
        <!-- Way Arrow -->
        <div id="arrow"> <img src="{{ asset('storage/views/templates/agents/assets/images/arrow.png') }}" alt="Estate Responsive Landing Page Template"></div>
        <!-- Way Arrow End --> 
        
        <img src="{{ asset('storage/views/templates/agents/assets/images/agent_pic.png') }}" alt="Estate Responsive Landing Page Template" class="img-responsive"> </div>
      <!-- Agent Pic Close --> 
      
      <!--  Get a free consultation! -->
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <div class="form"> <img src="{{ asset('storage/views/templates/agents/assets/images/get_form_hedding.png') }}" alt="Estate Responsive Landing Page Template">
          <div class="form-group">
            <label> Seu Nome *</label>
            <input type="text" id="fname" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Seu E-mail *</label>
            <input type="text" id="uemail" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Seu Telefone *</label>
            <input type="text" id="uphone" name="phone" class="form-control">
          </div>
          <div class="form-group">
            <label>Mensagem</label>
            <textarea id="uzip" name="zip" class="form-control"> </textarea>
          </div>
          <div id="form-errors"></div>
          <div class="form-group">
            <input type="submit" value="RESERVE A SLOT" name="btn" id="em_submit" onClick="send_mail();">
          </div>
          <div id="form-success"></div>
        </div>
      </div>
      <!--  Get a free consultation! Close --> 
      
    </div>
  </div>
</section>
<!--Hedder Section Close-->