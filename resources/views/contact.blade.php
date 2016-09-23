@extends('layouts.default')
@section('content')
    <div class="row">
        <section>
            <p>
                Mein Perfekter Garten GmbH<BR>
                Brauneggerstr. 55<BR>
                78462 Konstanz<BR>
            </p>
            <p>
                Bitte Rufen Sie uns an oder senden Sie uns eine E-Mail!
            </p>
            <p>
                Fon: +49 7531 206-462<BR>
                Fax: +49 7531 206-559<BR>
                eMail: info@meinperfektergarten.de<BR>
            </p>
        </section>

        <section>
            <h2>Schreiben Sie uns, ihr persönlicher Berater meldet sich innerhalb der nächsten 24 Stunden bei Ihnen
                zurück:</h2>
            <form>
                <div>Wie sollen wir uns bei Ihnen melden?</div>
                <div>
                    <select name="contact_type">
                        <option value="email">E-Mail</option>
                        <option value="fon">Telefon</option>
                        <option value="sms">SMS</option>
                    </select>
                </div>
                <div>E-Mail Adresse:</div>
                <div><input type="text" size="30 maxlength=" 50"></div>
                <div>Name:</div>
                <div><input type="text" size="30 maxlength=" 50"></div>
                <div>Nachricht</div>
                <div><textarea name="message" rows="20" cols="80">Ihre Nachricht..</textarea></div>
                <div><input type="submit" value="Nachricht abschicken"</div>
            </form>

        </section>

    </div>
@endsection