<section class="section contacto" id="contacto">
    <p data-aos-delay="0" data-aos="fade-down">
        Si quieres concretar tu cita escríbenos o llama al
        <a href=""><p>695 543 809</p></a>
    </p>
    <form method="POST" action="{{route('contacto')}}">
      @csrf
        <input data-aos-delay="0" data-aos="fade-left" name="asunto"  placeholder="Nombre" type="text"><br>
        <input data-aos-delay="100" data-aos="fade-left" name="email"  placeholder="Email" type="text"><br>
        <textarea data-aos-delay="200" data-aos="fade-left" name="mensaje"  placeholder="Mensaje" name=""></textarea>
        <button data-aos-delay="100" data-aos="fade-left" type="submit" >Enviar</button><br>
    </form>
</section>