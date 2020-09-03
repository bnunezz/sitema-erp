<footer class="container-fluid py-5 rodape">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md">
                <h5>Website name</h5>
                <ul class="list-unstyled text-small">
                    <li><?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'link-rodape']) ?></li>
                    <li><?= $this->Html->link(__('Sobre'), ['controller' => 'Sobre', 'action' => 'index'], ['class' => 'link-rodape']) ?></li>
                    <li><?= $this->Html->link(__('Contato'), ['controller' => 'Contato', 'action' => 'index'], ['class' => 'link-rodape']) ?></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contato</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-rodape" href="tel:(XXX) XXXX-XXXX">(XXX) XXXX-XXXX</a></li>
                    <li><a class="link-rodape" href="https://www.google.com/maps/place/Av.+Rep%C3%BAblica,+Mar%C3%ADlia+-+SP/@-22.1885548,-49.9618257,17z/data=!3m1!4b1!4m8!1m2!2m1!1sav+republica!3m4!1s0x94bfd6e8baf4d2ef:0xda221e36eacefe18!8m2!3d-22.1885548!4d-49.959637" target="_blank">Av. Republica</a></li>
                    <li>CNPJ: 94.175.035/0001-05</li>

                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Redes Sociais</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-rodape" href="#">Facebook</a></li>
                    <li><a class="link-rodape" href="#">Twiter</a></li>
                    <li><a class="link-rodape" href="#">Youtube</a></li>
                    <li><a class="link-rodape" href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>