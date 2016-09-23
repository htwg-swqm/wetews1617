@extends('layouts.default')
@section('css')
    <link href="../../css/index_plain.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row intro">
        <div class="col-sm-12 col-md-12">
            <img src="../../img/kirschbluete-japanischer-garten-1920x1200.jpg" style="max-width:100%;height:auto">
            <h2 class="mpg_header">Noch nie war Garten so einfach!</h2>
            <p>
                Mein Perfekter Garten hilft ihnen damit Sie den Überblick in Ihrem Garten nicht verlieren. Im
                Mittelpunkt steht die Pflege
                Ihrer Pflanzen, damit Sie sich lange an Ihnen erfreuen können. Mit Meinem Perfekten Garten können
                Sie
                auf Sie zugeschnittene
                Pflegeplänge einfach erstellen und behalten so den Überblick. Mit der Mein Garten Funktion
                dokumentieren
                Sie ihren Garten und können
                mit der praktischen Kommentarfunktion jederzeit nachverfolgen, was Sie an der Pflanze gemacht haben.
            </p>
        </div>
    </div>
    <div class="row">
        <section class="col-sm-4 col-md-3">
            <img src="../../img/lexikon.jpg" class="center-block main_img"/>
            <h2>Lexikon</h2>
            <p class="center-block">
                Das Pflanzenlexikon von MyPerfektGarden gibt Ihnen Zugriff auf über 1700 Pflanzenarten.
                Mit dem umfassenden Lexikon können Sie Ihre Gartenpflanzen einfach identifizieren und
                Zusatzinformationen wie optimaler Standort, Pflegehinweise und Schädlingsbekämpfung abrufen.
            </p>
        </section>
        <section class="col-sm-4 col-md-3">
            <img src="../../img/overview.jpg" class="center-block main_img"/>
            <h2>Mein Garten</h2>
            <p class="center-block">
                Mit MyPerfectGarden behalten Sie die perfekte Übersicht in ihrem Garten.
                Sie können alle Pflanzen katalogisieren und mit Zusatzinformationen versehen,
                z.B. wann sie gepflanzt wurden oder den genauen Standort GPS genau angeben.
                Sie können die Pflanze einer Pflanzenart aus dem Pflanzenlexikon zuordnen und haben
                somit immer alle wichtigen Informationen zur Pflege per Knopfdruck parat.
            </p>
        </section>
        <section class="col-sm-4 col-md-3">
            <img src="../../img/pflege.jpg" class="center-block main_img"/>
            <h2>Pflege</h2>
            <p class="center-block">
                MyPerfectGarden verknüpft auf einzigartige Weise die Pflöegeinformationen im Pflanzenlexikon mit den
                Daten zu ihrem Garten. Nie mehr mühsam nachschlagen um zu schauen wann eine Pflanze geschnitten
                werden
                muß,
                wie man sie überwintert oder wieviel Wasser sie benötigt.
                Mit MyPerfectGarden erstellen sie vollautomatisch einen Pflegeplan der auf die Jahreszeit abgestimmt
                ist
                und Ihnen aller
                wichtigen Information zu Ihren Pflanzen auf einen Blick bietet.
            </p>
        </section>

        <aside class="col-sm-12 col-md-3">
            <h2>Pflanze des Monats</h2>
            <h3>Schmetterlingsflieder (<em>Buddleja davidii</em>)</h3>
            <div class="row">
                <div>
                    <div class="col-md-12 col-sm-4">
                        <img src="../../img/BuddlejaDavidiiStrauch1.jpg" class="plant_of_the_month_img"/>
                    </div>
                    <div>
                        <div class="col-md-12 col-sm-8">
                            <p>
                                Der Schmetterlingsflieder wächst als laubabwerfender Strauch und kann Wuchshöhen von 0,5 bis
                                5
                                Metern
                                erreichen. Die fast vierkantigen Zweige besitzen eine charakteristische, filzig behaarte
                                Rinde.
                            </p>
                            <a class="more_info" href="species.html">Mehr Informationen</a>
                        </div>
                    </div>
        </aside>
    </div>
@endsection