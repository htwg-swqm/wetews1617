<?php

use Illuminate\Database\Seeder;
use App\Species;
use App\SpeciesImage;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = 'Der Schmetterlingsflieder wächst als laubabwerfender Strauch und kann Wuchshöhen von 0,5 bis 5 Metern erreichen. Die fast vierkantigen Zweige besitzen eine charakteristische, filzig behaarte Rinde. Die gegenständig an den Zweigen angeordneten Laubblätter sind bis zu 25 Zentimeter lang und 7 Zentimeter breit, schmal-lanzettlich und schwach gezähnt. Sie sind an ihrer Oberseite dunkelgrün und auf der Unterseite graufilzig. Die meist vorhandenen Nebenblätter sind mit einem Durchmesser von 1 bis 6 Millimetern fast kreisförmig bis eiförmig.';
        $site = 'Der schnellwüchsige Sommerflieder fühlt sich in der Sonne und im Halbschatten gleichermaßen wohl. Mit der Standortwahl sind Sie in der Hinsicht also recht flexibel. Allerdings benötigt Buddleja ein wenig Platz in alle Richtungen. Hat sich der Strauch gut eingelebt, kann er, je nach Sorte, schon eine Höhe von vier Meter erreichen. Die Breite ist ebenfalls sortenabhängig. Zweieinhalb Meter im Durchmesser sind kein Einzelfall. Die meisten Pflanzen wünschen sich einen durchlässigen Boden. Der Sommerflieder ebenfalls. Es ist kein Schaden, wenn es sich dabei auch noch um einen nährstoffreichen Boden handelt.';
        $care = 'Der Sommerflieder stellt keine großen Ansprüche und benötigt kein spezielles Pflegeprogramm. Im Frühjahr können Sie ein wenig Dünger verabreichen. Wenn Sie es mal vergessen, kommt der Strauch trotzdem klar.
Sofern es sich um einen jungen Sommerflieder handelt, benötigt der Strauch während der Sommermonate, insbesondere in trockenen Zeiten, regelmäßig Wasser. Ältere Sträucher hingegen können Sie vernachlässigen – gründliches Wässern ist dann nur in regenarmen Zeiten notwendig.

Zur Pflege des Sommerflieders gehört auch der richtige Schnitt.

Im Sommer bewaffnen Sie sich mit einer sauberen und scharfen Gartenschere. Denn möglichst direkt nach der Blüte werden die ausgeblühten Rispen abgeschnitten, damit die Selbstaussaat verhindert wird. Diese kommen besser nicht auf den Kompost, sondern in den Müll. Denn oftmals überleben die Samen im Komposthaufen und werden so ungewollt im Garten verteilt. Bei der Gelegenheit können Sie dann auch gleich abgestorbene und störende Äste entfernen.

Das zeitige Frühjahr hingegen können Sie für einen Rückschnitt einplanen. Dazu verwenden Sie am besten eine scharfe und saubere Astschere oder gar eine Säge – an einem frostfreien und trockenen Tag. Wenn Sie ganz radikal vorgehen möchten, setzen Sie den Sommerflieder auf den Stock. Dabei lassen Sie den Stamm zwischen einem halben bis ganzen Meter über dem Boden stehen. Nicht ganz so mutige Hobbygärtner begnügen sich mit einem Rückschnitt oder einen nicht ganz so tiefen Radikalschnitt.

Kürzen Sie dabei den jeweiligen Hauptast so ein, dass Sie direkt über einer Knospe schneiden oder sägen, die nach außen schaut. Wenn Sie einen Rückschnitt an den Seitenästen vornehmen, achten Sie ebenfalls auf die vorhandenen Knospen.';
        $species = Species::create(array('latin_name' => 'Buddleja davidii',
            'german_name' => 'Schmetterlingsflieder', 'description' => $description, 'site' => $site, 'care' => $care));

        $image1 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/BuddlejaDavidiiStrauch1.jpg'));
        $image2 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/BuddlejaDavidiiStrauch2.jpg'));
        $image3 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/BuddlejaDavidiiStrauch3.jpeg'));
        $image4 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/BuddlejaDavidiiStrauch4.jpeg'));


        /*******/
        $description = 'Der Oleander ist eine immergrüne verholzende Pflanze. Die normalerweise zu dritt, quirlig am Ast angeordneten Laubblätter sind ledrig, dunkelgrün und bei einer Länge von 6 bis 24 cm lanzettförmig. Die Blattspreite kann bis zu 5 cm betragen.

Die Blütezeit erstreckt sich von Mitte Juni bis in den September hinein. Mehrere Blüten stehen in einem trugdoldigen Blütenstand zusammen. Die zwittrigen Blüten sind fünfzählig. Die Blütenkronblätter sind, je nach Sorte und Züchtung, weiß, gelblich oder in verschiedenen Rosa- bis Violetttönen. Wilde Oleander blühen meist rosarot.';
        $site = 'Der Oleander hat ein großes Verbreitungsgebiet in einem Streifen von Marokko (hier bis in Höhenlagen von 2000 Meter) und Südspanien über das ganze Mittelmeergebiet, den Nahen und Mittleren Osten, Indien bis China. Die früher vertretene Auffassung, bei den asiatischen Wildformen handele es sich um eine eigene Art (Nerium indicum), wird wegen der zu geringen Unterschiede im Phänotyp heute nicht mehr bestätigt.

Der Oleander wächst im Mittelmeergebiet von Natur aus in südmediterranen Auengesellschaften (Nerio-Tamaricetea).';
        $care = 'Bei der Kübelhaltung ist auf eine gute Wässerung und Düngung in der warmen Jahreszeit zu achten. Im Winter sollte der Oleander kühl (5–10 °C sind ideal) gehalten werden, eine Überwinterung im beheizten Wohnraum ist wegen der Gefahr von starkem Spinnmilbenbefall und Vergeilung zu vermeiden.';
        $species = Species::create(array('latin_name' => 'Nerium oleander',
            'german_name' => 'Oleander', 'description' => $description, 'site' => $site, 'care' => $care));

        $image1 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/Nerium_oleander_flowers_leaves.jpg'));
        $image2 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/Batalha.Nerium_oleander01.jpg'));

        /*******/
        $description = 'Die Pflanze wächst als sommergrüner Strauch oder kleiner Baum mit Wuchshöhen zwischen 2 und 6 Meter. Die rundlichen Zweige haben eine graue oder braungrüne Rinde, die an den Ästen und am Stamm längsrissig ist.

Die gegenständig angeordneten Blätter werden zwischen 5 und 12 Zentimeter lang und sind 1 bis 3 Zentimeter gestielt. Die herzförmigen Blätter sind lang zugespitzt und glattrandig.

Die stark riechenden, vierzähligen Blüten stehen in einer dichten, endständigen Rispe. Die Farbe kann blau, violett, rötlich oder weiß sein. Blütezeit ist von April bis Mai.

Als Früchte werden zweiklappige, bräunliche und holzige Kapseln gebildet. Die Fruchtreife setzt ab September ein.';
        $site = 'Der Gemeine Flieder ist in Südosteuropa und Vorderasien verbreitet. Die Art wird häufig in zahlreichen Gartensorten angepflanzt und ist vielfach an Felshängen oder Bahndämmen eingebürgert.

Als Standort werden lichte Wälder und Gebüsche bevorzugt.';
        $care = '';
        $species = Species::create(array('latin_name' => 'Syringa vulgaris',    'german_name' => 'Gemeine Flieder', 'description' => $description, 'site' => $site, 'care' => $care));

        $image1 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/Flieder.jpg'));
        $image2 = SpeciesImage::create(array('species_id'=> $species->id,'url'=>'/img/Neckar_GemeinerFlieder.JPG'));

    }
}
