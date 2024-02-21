@extends('home')


@section('contenuAcceuil')

    

        <!-- Header -->
        <header class="header">
        <div class="container flex">
            
            <div class="text">
            <h1 class="mb">
                <span>PGC-GYM</span> <br />
                Salle De <span>Musculation</span>
            </h1>

            <p class="mb">
            PGC-GYM est une salle de musculation moderne et dynamique offrant 
            un environnement propice à l'entraînement et au développement physique.
            Équipée d'une vaste gamme d'appareils et d'équipements de pointe, 
            Fit-Pro vous propose une expérience d'entraînement exceptionnelle.
            Vous y trouverez une variété de machines de musculation haut de gamme,
            des poids libres, des équipements cardiovasculaires de dernière génération 
            et des accessoires de musculation pour vous accompagner dans votre parcours de remise en forme. 
            De plus, l'ambiance énergisante de Fit-Pro et l'équipe de professionnels passionnés sont 
            là pour vous motiver et vous guider tout au long de votre séance d'entraînement. 
            Venez découvrir Fit-Pro et atteignez vos objectifs de forme physique dans un cadre moderne et stimulant.
            </p>

            
            </div>

            <div class="visual">
            <img
                src="{{ asset('images\imgAC1.png') }}"
                alt=""
            />
            </div>
        </div>
        </header>
        <!-- End Header -->

        <!-- Why Us -->
        <div class="section" id="why-us">
        <div class="container flex">
            <div class="text">
            <h2 class="primary mb">PGC-GYM</h2>
            <h3 class="secondary mb">Ne rêves pas d'un corps parfait, travaillez pour l'obtenir</h3>
            <p class="tertiary">
            Découvrez le site web PGC-GYM, votre guichet unique pour le fitness 
            et le bien-être. Achetez facilement des protéines, 
            vitamines et accessoires en ligne, et inscrivez-vous en quelques clics 
            pour commencer votre parcours de remise en forme. Profitez également 
            de notre service de livraison pratique, 
            qui vous apporte vos produits directement à votre porte. 
            </p>

            <h3 class="secondary mb">Simplifiez votre expérience de fitness 
                                    avec PGC-GYM en ligne.</h3>
            
            <a href="/produits" class="btn mt">Boutique</a>
            <a href="/forfaits" class="btn mt">Forfaits</a>
            </div>
            <div class="visual">
            <img
                src="{{ asset('images\imgAC2.png') }}"
                alt=""
            />
            </div>
        </div>
        </div>
        <!-- End Why Us -->

        <!-- Testimonial -->
        <div class="section" id="testimonial">
        <div class="container flex">
            <div class="text">
            <h2 class="primary">
            Nous espérons que vous vivrez une excellente expérience sur notre site.<br/> 
            Profitez pleinement de votre parcours de remise en forme avec nous.<br/>
            <span class="secondary mb">Merci à tous nos utilisateurs !</span>
            </h2>

            <br />
            <br />
            <br />

        <!-- Footer -->
        <footer class="footer">
        <div class="container flex">
            <p class="tertiary">
            &copy; PGC-GYM à votre service
            </p>
        </div>
        </footer>
@endsection