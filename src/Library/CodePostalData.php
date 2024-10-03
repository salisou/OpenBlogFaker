<?php

namespace Salis\OpenBlogFaker\Library;

class CodePostalData
{
    private $codePostal;
    public function __construct()
    {

        $this->codePostal = [["postalZip" => "07943"], ["postalZip" => "72137"], ["postalZip" => "03770"], ["postalZip" => "5707"], ["postalZip" => "51893"], ["postalZip" => "724953"], ["postalZip" => "24324"], ["postalZip" => "72-227"], ["postalZip" => "879617"], ["postalZip" => "74868-68555"], ["postalZip" => "1237"], ["postalZip" => "7674 HI"], ["postalZip" => "20873"], ["postalZip" => "7627"], ["postalZip" => "9856"], ["postalZip" => "972635"], ["postalZip" => "63567"], ["postalZip" => "3287"], ["postalZip" => "4364"], ["postalZip" => "89353-472"], ["postalZip" => "14695"], ["postalZip" => "535763"], ["postalZip" => "77695"], ["postalZip" => "914221"], ["postalZip" => "30866"], ["postalZip" => "2635"], ["postalZip" => "763572"], ["postalZip" => "8255-3388"], ["postalZip" => "959641"], ["postalZip" => "758238"], ["postalZip" => "394442"], ["postalZip" => "26772"], ["postalZip" => "69745"], ["postalZip" => "391673"], ["postalZip" => "414315"], ["postalZip" => "37005"], ["postalZip" => "25-12"], ["postalZip" => "78391"], ["postalZip" => "24478"], ["postalZip" => "21819"], ["postalZip" => "2677"], ["postalZip" => "753763"], ["postalZip" => "20603"], ["postalZip" => "56-760"], ["postalZip" => "04814"], ["postalZip" => "21-25"], ["postalZip" => "761716"], ["postalZip" => "50517-665"], ["postalZip" => "98054"], ["postalZip" => "2166"], ["postalZip" => "6508"], ["postalZip" => "2395"], ["postalZip" => "877367"], ["postalZip" => "717367"], ["postalZip" => "85255"], ["postalZip" => "08242"], ["postalZip" => "61612-445"], ["postalZip" => "966673"], ["postalZip" => "89167"], ["postalZip" => "30213"], ["postalZip" => "36192"], ["postalZip" => "7836"], ["postalZip" => "8094"], ["postalZip" => "288884"], ["postalZip" => "2068"], ["postalZip" => "157606"], ["postalZip" => "8537-9751"], ["postalZip" => "18621"], ["postalZip" => "589385"], ["postalZip" => "80952"], ["postalZip" => "P96 9SB"], ["postalZip" => "40809"], ["postalZip" => "8224"], ["postalZip" => "0763-1536"], ["postalZip" => "58126-044"], ["postalZip" => "23585-17673"], ["postalZip" => "826877"], ["postalZip" => "47858"], ["postalZip" => "5073 BU"], ["postalZip" => "69-88"], ["postalZip" => "67625-168"], ["postalZip" => "268254"], ["postalZip" => "536735"], ["postalZip" => "65991"], ["postalZip" => "75-254"], ["postalZip" => "14048"], ["postalZip" => "8494"], ["postalZip" => "3448 JN"], ["postalZip" => "48575"], ["postalZip" => "1790"], ["postalZip" => "4152"], ["postalZip" => "95050-828"], ["postalZip" => "5266"], ["postalZip" => "8326"], ["postalZip" => "69141"], ["postalZip" => "R0L 1A7"], ["postalZip" => "88575-663"], ["postalZip" => "84794"], ["postalZip" => "536838"], ["postalZip" => "81W 8C3"], ["postalZip" => "3156 RC"], ["postalZip" => "7226"], ["postalZip" => "11543-200"], ["postalZip" => "924685"], ["postalZip" => "944580"], ["postalZip" => "598738"], ["postalZip" => "61320"], ["postalZip" => "H6M 5M2"], ["postalZip" => "0113 AG"], ["postalZip" => "2665"], ["postalZip" => "FF2 8BY"], ["postalZip" => "8547"], ["postalZip" => "51499"], ["postalZip" => "38-376"], ["postalZip" => "413267"], ["postalZip" => "66896-365"], ["postalZip" => "4157"], ["postalZip" => "236687"], ["postalZip" => "534877"], ["postalZip" => "51K 1T1"], ["postalZip" => "1377-4217"], ["postalZip" => "18670"], ["postalZip" => "762353"], ["postalZip" => "2639"], ["postalZip" => "8911"], ["postalZip" => "66-648"], ["postalZip" => "467640"], ["postalZip" => "64128"], ["postalZip" => "463762"], ["postalZip" => "17286"], ["postalZip" => "4107"], ["postalZip" => "368342"], ["postalZip" => "522492"], ["postalZip" => "2475"], ["postalZip" => "85416"], ["postalZip" => "71564"], ["postalZip" => "675673"], ["postalZip" => "2056"], ["postalZip" => "05146"], ["postalZip" => "09268"], ["postalZip" => "75878"], ["postalZip" => "22401"], ["postalZip" => "5738"], ["postalZip" => "97482"], ["postalZip" => "308566"], ["postalZip" => "5443"], ["postalZip" => "8385 VI"], ["postalZip" => "69-22"], ["postalZip" => "163148"], ["postalZip" => "24-770"], ["postalZip" => "42543"], ["postalZip" => "03687"], ["postalZip" => "4516-3713"], ["postalZip" => "51507"], ["postalZip" => "18707"], ["postalZip" => "30484"], ["postalZip" => "57687"], ["postalZip" => "8218"], ["postalZip" => "156268"], ["postalZip" => "8648"], ["postalZip" => "6263"], ["postalZip" => "65-82"], ["postalZip" => "2476"], ["postalZip" => "37161"], ["postalZip" => "65926-526"], ["postalZip" => "68345-776"], ["postalZip" => "584739"], ["postalZip" => "5354"], ["postalZip" => "H3S 1V3"], ["postalZip" => "734517"], ["postalZip" => "14021"], ["postalZip" => "0596"], ["postalZip" => "47536"], ["postalZip" => "27274"], ["postalZip" => "5332"], ["postalZip" => "70880"], ["postalZip" => "8112"], ["postalZip" => "696356"], ["postalZip" => "30617"], ["postalZip" => "32146"], ["postalZip" => "737016"], ["postalZip" => "339729"], ["postalZip" => "7464"], ["postalZip" => "VG47 4WO"], ["postalZip" => "481843"], ["postalZip" => "2561-2754"], ["postalZip" => "13295"], ["postalZip" => "23356"], ["postalZip" => "27756"], ["postalZip" => "76477"], ["postalZip" => "44023"], ["postalZip" => "03014"], ["postalZip" => "1036"], ["postalZip" => "10-614"], ["postalZip" => "45485"], ["postalZip" => "1476"], ["postalZip" => "4255"], ["postalZip" => "30805"], ["postalZip" => "88829-33388"], ["postalZip" => "58336"], ["postalZip" => "22511"], ["postalZip" => "6884"], ["postalZip" => "20125"], ["postalZip" => "67859"], ["postalZip" => "35-78"], ["postalZip" => "11684"], ["postalZip" => "9387-1475"], ["postalZip" => "36181"], ["postalZip" => "20800"], ["postalZip" => "210152"], ["postalZip" => "5688"], ["postalZip" => "42766"], ["postalZip" => "X40 2US"], ["postalZip" => "1106"], ["postalZip" => "6576"], ["postalZip" => "632147"], ["postalZip" => "05610-11517"], ["postalZip" => "67823"], ["postalZip" => "155166"], ["postalZip" => "8798 ET"], ["postalZip" => "72403"], ["postalZip" => "8460"], ["postalZip" => "31239"], ["postalZip" => "494582"], ["postalZip" => "5688"], ["postalZip" => "2223 DV"], ["postalZip" => "61609"], ["postalZip" => "281285"], ["postalZip" => "989454"], ["postalZip" => "771113"], ["postalZip" => "144872"], ["postalZip" => "25665"], ["postalZip" => "215188"], ["postalZip" => "99768"], ["postalZip" => "58041"], ["postalZip" => "779652"], ["postalZip" => "492186"], ["postalZip" => "2123"], ["postalZip" => "8137"], ["postalZip" => "8515"], ["postalZip" => "6426-3767"], ["postalZip" => "2603"], ["postalZip" => "26651"], ["postalZip" => "12271"], ["postalZip" => "795821"], ["postalZip" => "830169"], ["postalZip" => "456115"], ["postalZip" => "570972"], ["postalZip" => "Y0A 2T6"], ["postalZip" => "636135"], ["postalZip" => "176356"], ["postalZip" => "3321 ZR"], ["postalZip" => "665827"], ["postalZip" => "774557"], ["postalZip" => "65-15"], ["postalZip" => "16656"], ["postalZip" => "14192"], ["postalZip" => "422695"], ["postalZip" => "77715"], ["postalZip" => "421314"], ["postalZip" => "58-24"], ["postalZip" => "744896"], ["postalZip" => "572212"], ["postalZip" => "A3K 3C2"], ["postalZip" => "947248"], ["postalZip" => "751556"], ["postalZip" => "69166"], ["postalZip" => "47217"], ["postalZip" => "842804"], ["postalZip" => "42471"], ["postalZip" => "Y0G 2M0"], ["postalZip" => "114884"], ["postalZip" => "75546"], ["postalZip" => "6701-1844"], ["postalZip" => "1456"], ["postalZip" => "5532 TD"], ["postalZip" => "51503"], ["postalZip" => "1112"], ["postalZip" => "343772"], ["postalZip" => "14224"], ["postalZip" => "72744"], ["postalZip" => "44031"], ["postalZip" => "982487"], ["postalZip" => "7624"], ["postalZip" => "2446"], ["postalZip" => "744404"], ["postalZip" => "14363"], ["postalZip" => "13239"], ["postalZip" => "825927"], ["postalZip" => "4890"], ["postalZip" => "71842"], ["postalZip" => "135287"], ["postalZip" => "3930"], ["postalZip" => "82662"], ["postalZip" => "12233"], ["postalZip" => "138726"], ["postalZip" => "62-72"], ["postalZip" => "43-77"], ["postalZip" => "8721-1253"], ["postalZip" => "8556-5230"], ["postalZip" => "6235 BI"], ["postalZip" => "83N 2C4"], ["postalZip" => "287746"], ["postalZip" => "941108"], ["postalZip" => "9133"], ["postalZip" => "56735"], ["postalZip" => "44732"], ["postalZip" => "G3 8UN"], ["postalZip" => "283638"], ["postalZip" => "665138"], ["postalZip" => "174746"], ["postalZip" => "741864"], ["postalZip" => "5541-7923"], ["postalZip" => "381945"], ["postalZip" => "233464"], ["postalZip" => "5445"], ["postalZip" => "30680"], ["postalZip" => "21711"], ["postalZip" => "13827"], ["postalZip" => "18854-76482"], ["postalZip" => "5346-2851"], ["postalZip" => "FX2 4SE"], ["postalZip" => "2496"], ["postalZip" => "2577"], ["postalZip" => "552485"], ["postalZip" => "6335"], ["postalZip" => "326447"], ["postalZip" => "4238"], ["postalZip" => "51-892"], ["postalZip" => "286080"], ["postalZip" => "819753"], ["postalZip" => "58843"], ["postalZip" => "25897"], ["postalZip" => "8679"], ["postalZip" => "7380"], ["postalZip" => "4481"], ["postalZip" => "2794"], ["postalZip" => "1862"], ["postalZip" => "17-733"], ["postalZip" => "3621"], ["postalZip" => "7768"], ["postalZip" => "12629"], ["postalZip" => "02-724"], ["postalZip" => "828211"], ["postalZip" => "553135"], ["postalZip" => "87539"], ["postalZip" => "0816"], ["postalZip" => "7966"], ["postalZip" => "20402"], ["postalZip" => "13656"], ["postalZip" => "86398"], ["postalZip" => "37721"], ["postalZip" => "124736"], ["postalZip" => "225592"], ["postalZip" => "F4I 3PE"], ["postalZip" => "021134"], ["postalZip" => "31676"], ["postalZip" => "2131"], ["postalZip" => "25-677"], ["postalZip" => "67317"], ["postalZip" => "691763"], ["postalZip" => "16958"], ["postalZip" => "357361"], ["postalZip" => "41518"], ["postalZip" => "4582 JN"], ["postalZip" => "9227"], ["postalZip" => "6271"], ["postalZip" => "757551"], ["postalZip" => "50202"], ["postalZip" => "71351"], ["postalZip" => "25743"], ["postalZip" => "6323"], ["postalZip" => "16760"], ["postalZip" => "58516-634"], ["postalZip" => "34-92"], ["postalZip" => "98735"], ["postalZip" => "461334"], ["postalZip" => "45748"], ["postalZip" => "33240"], ["postalZip" => "50208"], ["postalZip" => "44276"], ["postalZip" => "8038"], ["postalZip" => "95824"], ["postalZip" => "4783"], ["postalZip" => "3547"], ["postalZip" => "12010"], ["postalZip" => "0254 SH"], ["postalZip" => "308437"], ["postalZip" => "583558"], ["postalZip" => "03454"], ["postalZip" => "3425 PC"], ["postalZip" => "NN43 4XF"], ["postalZip" => "67-271"], ["postalZip" => "76-79"], ["postalZip" => "39215"], ["postalZip" => "PH26 8XV"], ["postalZip" => "980440"], ["postalZip" => "6799"], ["postalZip" => "828538"], ["postalZip" => "7046"], ["postalZip" => "J28 2QQ"], ["postalZip" => "4643"], ["postalZip" => "850778"], ["postalZip" => "89511"], ["postalZip" => "57058"], ["postalZip" => "5858"], ["postalZip" => "61778-602"], ["postalZip" => "62835"], ["postalZip" => "5154"], ["postalZip" => "7977"], ["postalZip" => "427539"], ["postalZip" => "19928"], ["postalZip" => "95-63"], ["postalZip" => "311323"], ["postalZip" => "11610"], ["postalZip" => "4327 RM"], ["postalZip" => "40509"], ["postalZip" => "977874"], ["postalZip" => "8448 AF"], ["postalZip" => "57668"], ["postalZip" => "56718"], ["postalZip" => "459323"], ["postalZip" => "70888"], ["postalZip" => "2116-8861"], ["postalZip" => "8614 EU"], ["postalZip" => "582673"], ["postalZip" => "781282"], ["postalZip" => "72970-25428"], ["postalZip" => "62-87"], ["postalZip" => "548677"], ["postalZip" => "4479"], ["postalZip" => "6752"], ["postalZip" => "72-774"], ["postalZip" => "183712"], ["postalZip" => "77486-25913"], ["postalZip" => "01861"], ["postalZip" => "20111"], ["postalZip" => "411413"], ["postalZip" => "617133"], ["postalZip" => "733763"], ["postalZip" => "26575"], ["postalZip" => "5875"], ["postalZip" => "3248"], ["postalZip" => "52875"], ["postalZip" => "16932"], ["postalZip" => "4778 HX"], ["postalZip" => "20604"], ["postalZip" => "140143"], ["postalZip" => "43115"], ["postalZip" => "87203"], ["postalZip" => "34575"], ["postalZip" => "41410"], ["postalZip" => "2857"], ["postalZip" => "28871"], ["postalZip" => "746842"], ["postalZip" => "1413"], ["postalZip" => "277681"], ["postalZip" => "184254"], ["postalZip" => "75976-33132"], ["postalZip" => "4912"], ["postalZip" => "83-684"], ["postalZip" => "73-075"], ["postalZip" => "46812"], ["postalZip" => "544419"], ["postalZip" => "71X 3G7"], ["postalZip" => "42279-269"], ["postalZip" => "66995"], ["postalZip" => "36524-27576"], ["postalZip" => "16629"], ["postalZip" => "3245"], ["postalZip" => "32314"], ["postalZip" => "344578"], ["postalZip" => "23979"], ["postalZip" => "28725"], ["postalZip" => "71195"], ["postalZip" => "J6S 2G3"], ["postalZip" => "11528"], ["postalZip" => "163585"], ["postalZip" => "377858"], ["postalZip" => "89404"], ["postalZip" => "6833"], ["postalZip" => "33694"], ["postalZip" => "533355"], ["postalZip" => "648105"], ["postalZip" => "2553"], ["postalZip" => "72706"], ["postalZip" => "04362"], ["postalZip" => "0117"], ["postalZip" => "308084"], ["postalZip" => "23483"], ["postalZip" => "82977"], ["postalZip" => "99880"], ["postalZip" => "85-841"], ["postalZip" => "6478"], ["postalZip" => "6817 RM"], ["postalZip" => "W64 8JH"], ["postalZip" => "8332"], ["postalZip" => "13-22"], ["postalZip" => "327671"], ["postalZip" => "858438"]];
    }

    /**
     * Get the value of city
     */
    public function CodePostal()
    {
        return $this->codePostal[rand(0, count($this->codePostal) - 1)]["postalZip"];
    }
}
