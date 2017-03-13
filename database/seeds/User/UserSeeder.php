<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
        [
            'FirstName'     =>  'Tebogo',
            'LastName'      =>  'Seshibe',
            'Email'         =>  'Tseshibe@gmail.com',
            'Password'      =>  'admin',
            'Confirmed'     =>  true,
            'DateCreated'   =>  '2017-01-01',
            'Active'        =>  true,
            'RoleId'        =>  1
        ]);
    
        User::firstOrCreate(
        [
            'FirstName'     =>  'Michael',
            'LastName'      =>  'Jackson',
            'Email'         =>  'mjackson@gmail.com',
            'Password'      =>  'supervisor',
            'Confirmed'     =>  true,
            'DateCreated'   =>  '2017-01-01',
            'Active'        =>  true,
            'RoleId'        =>  2
        ]);
    
        User::firstOrCreate(
        [
            'FirstName'     =>  'Jack',
            'LastName'      =>  'Dawson',
            'Email'         =>  'JDawson@gmail.com',
            'Password'      =>  'artisan',
            'Confirmed'     =>  true,
            'DateCreated'   =>  '2017-01-01',
            'Active'        =>  true,
            'RoleId'        =>  3
        ]);

        User::firstOrCreate(["FirstName" => "Ifeoma",       "LastName" => "Sawyer",     "Email" => "ultrices@Sednulla.ca",                          "Password" => "BHT03PPY3BB",    "DateCreated" => "2017-04-28"]);
        User::firstOrCreate(["FirstName" => "Darryl",       "LastName" => "Gilbert",    "Email" => "Maecenas.mi@varius.org",                        "Password" => "OUC09GDH5OU",    "DateCreated" => "2016-10-19"]);
        User::firstOrCreate(["FirstName" => "Gretchen",     "LastName" => "Kennedy",    "Email" => "feugiat.Sed.nec@acfacilisisfacilisis.ca",       "Password" => "DIV33YSL8VL",    "DateCreated" => "2017-03-04"]);
        User::firstOrCreate(["FirstName" => "Henry",        "LastName" => "Fischer",    "Email" => "Aliquam@Suspendisseacmetus.net",                "Password" => "RYT92DXG5MX",    "DateCreated" => "2017-03-21"]);
        User::firstOrCreate(["FirstName" => "Madaline",     "LastName" => "Roman",      "Email" => "tincidunt.adipiscing.Mauris@SednequeSed.net",   "Password" => "EPI08RVL6FV",    "DateCreated" => "2016-05-31"]);
        User::firstOrCreate(["FirstName" => "Lucius",       "LastName" => "Hodge",      "Email" => "sapien.imperdiet@faucibus.net",                 "Password" => "GIZ42WOR1NT",    "DateCreated" => "2016-09-10"]);
        User::firstOrCreate(["FirstName" => "Dominic",      "LastName" => "Horn",       "Email" => "magna.Phasellus.dolor@nislQuisque.co.uk",       "Password" => "RMU33AHK7KX",    "DateCreated" => "2016-03-31"]);
        User::firstOrCreate(["FirstName" => "Olga",         "LastName" => "Russell",    "Email" => "sociis.natoque@seddolorFusce.ca",               "Password" => "DNC70MUX5HS",    "DateCreated" => "2017-11-29"]);
        User::firstOrCreate(["FirstName" => "Inez",         "LastName" => "Booker",     "Email" => "eu@Aeneanegestashendrerit.co.uk",               "Password" => "YPW21MYT6DN",    "DateCreated" => "2017-12-07"]);
        User::firstOrCreate(["FirstName" => "Penelope",     "LastName" => "Gillespie",  "Email" => "sem.magna@antedictummi.org",                    "Password" => "NTP60IBV8UH",    "DateCreated" => "2017-04-05"]);
        User::firstOrCreate(["FirstName" => "Odysseus",     "LastName" => "Craft",      "Email" => "vitae.sodales.nisi@commodoipsum.com",           "Password" => "YLB60OTD3MX",    "DateCreated" => "2016-06-12"]);
        User::firstOrCreate(["FirstName" => "Leigh",        "LastName" => "Thomas",     "Email" => "vel@maurisaliquam.edu",                         "Password" => "YOA98PLY2JL",    "DateCreated" => "2017-04-25"]);
        User::firstOrCreate(["FirstName" => "Kamal",        "LastName" => "Moody",      "Email" => "ipsum.porta@tempor.co.uk",                      "Password" => "GFZ27ULT6JI",    "DateCreated" => "2017-08-04"]);
        User::firstOrCreate(["FirstName" => "Thor",         "LastName" => "Hayes",      "Email" => "consectetuer@Aeneaneget.co.uk",                 "Password" => "NCJ04DOD1LC",    "DateCreated" => "2015-01-21"]);
        User::firstOrCreate(["FirstName" => "Dorian",       "LastName" => "Cummings",   "Email" => "hendrerit.id@sit.org",                          "Password" => "IAV06IBX5AB",    "DateCreated" => "2016-10-09"]);
        User::firstOrCreate(["FirstName" => "Demetrius",    "LastName" => "Serrano",    "Email" => "Nulla.aliquet@velitSed.co.uk",                  "Password" => "XGT28HBZ3VX",    "DateCreated" => "2016-08-02"]);
        User::firstOrCreate(["FirstName" => "Martina",      "LastName" => "Cohen",      "Email" => "sed.turpis.nec@tempuseuligula.com",             "Password" => "VJJ39LCH5DL",    "DateCreated" => "2015-03-03"]);
        User::firstOrCreate(["FirstName" => "Dominique",    "LastName" => "Strong",     "Email" => "ornare.tortor.at@elit.edu",                     "Password" => "DDX42HCK0SP",    "DateCreated" => "2016-09-25"]);
        User::firstOrCreate(["FirstName" => "Cade",         "LastName" => "Velazquez",  "Email" => "Vivamus.euismod@magnaSedeu.net",                "Password" => "QLG03ESG8TC",    "DateCreated" => "2016-04-24"]);
        User::firstOrCreate(["FirstName" => "Zeus",         "LastName" => "Gregory",    "Email" => "Donec@apurus.ca",                               "Password" => "VYO42EWL4AS",    "DateCreated" => "2017-10-06"]);
        User::firstOrCreate(["FirstName" => "Hedy",         "LastName" => "Bird",       "Email" => "luctus.et.ultrices@risusIn.com",                "Password" => "QTO21PKI0XS",    "DateCreated" => "2016-06-29"]);
        User::firstOrCreate(["FirstName" => "Howard",       "LastName" => "Weiss",      "Email" => "ut.mi.Duis@dolor.ca",                           "Password" => "EUK82JJB6KE",    "DateCreated" => "2016-12-09"]);
        User::firstOrCreate(["FirstName" => "Halee",        "LastName" => "Kennedy",    "Email" => "Lorem@Donecelementumlorem.edu",                 "Password" => "QYW73ARX6RG",    "DateCreated" => "2017-10-15"]);
        User::firstOrCreate(["FirstName" => "Hayden",       "LastName" => "Vaughan",    "Email" => "Nam.ac.nulla@Quisquetinciduntpede.net",         "Password" => "UTO25LMQ5AD",    "DateCreated" => "2017-01-15"]);
        User::firstOrCreate(["FirstName" => "Ingrid",       "LastName" => "Sandoval",   "Email" => "ipsum.dolor@semelit.com",                       "Password" => "DHJ85CAE9TS",    "DateCreated" => "2015-01-15"]);
        User::firstOrCreate(["FirstName" => "Moana",        "LastName" => "Reid",       "Email" => "tempor.augue@Vivamusnonlorem.ca",               "Password" => "CUE86FQG3QC",    "DateCreated" => "2017-06-29"]);
        User::firstOrCreate(["FirstName" => "Thaddeus",     "LastName" => "Webster",    "Email" => "imperdiet.ornare@velconvallisin.com",           "Password" => "COV50ELE9WZ",    "DateCreated" => "2015-03-01"]);
        User::firstOrCreate(["FirstName" => "Ivory",        "LastName" => "Hoffman",    "Email" => "varius.ultrices.mauris@Morbi.com",              "Password" => "JXE30DAI5KI",    "DateCreated" => "2017-03-27"]);
        User::firstOrCreate(["FirstName" => "Sebastian",    "LastName" => "Cohen",      "Email" => "ac.mattis.velit@placerat.com",                  "Password" => "AUY93GSK2RC",    "DateCreated" => "2015-03-05"]);
        User::firstOrCreate(["FirstName" => "Rhoda",        "LastName" => "Golden",     "Email" => "ornare.egestas@utdolordapibus.com",             "Password" => "VHZ14VCW4ZH",    "DateCreated" => "2016-06-30"]);
        User::firstOrCreate(["FirstName" => "Dustin",       "LastName" => "Cruz",       "Email" => "nunc@lectus.ca",                                "Password" => "BER12WCD4WF",    "DateCreated" => "2015-01-28"]);
        User::firstOrCreate(["FirstName" => "Phillip",      "LastName" => "Sparks",     "Email" => "dignissim.magna@quis.edu",                      "Password" => "TBJ65IEN2HE",    "DateCreated" => "2017-01-15"]);
        User::firstOrCreate(["FirstName" => "Maris",        "LastName" => "Murphy",     "Email" => "massa.Quisque.porttitor@velest.org",            "Password" => "GFL57KFF8TW",    "DateCreated" => "2016-03-25"]);
        User::firstOrCreate(["FirstName" => "Vance",        "LastName" => "Morgan",     "Email" => "Fusce.mi.lorem@nislNulla.net",                  "Password" => "GDU63NEC1DQ",    "DateCreated" => "2015-01-21"]);
        User::firstOrCreate(["FirstName" => "Cora",         "LastName" => "Pearson",    "Email" => "vel.faucibus@consectetuer.co.uk",               "Password" => "YFY87ALZ0WF",    "DateCreated" => "2017-12-17"]);
        User::firstOrCreate(["FirstName" => "Caleb",        "LastName" => "Riddle",     "Email" => "porttitor.tellus.non@musAenean.edu",            "Password" => "UUW12PPK1SW",    "DateCreated" => "2017-07-10"]);
        User::firstOrCreate(["FirstName" => "Astra",        "LastName" => "Miller",     "Email" => "magna@imperdietnecleo.org",                     "Password" => "GIB24VDP8YG",    "DateCreated" => "2017-02-24"]);
        User::firstOrCreate(["FirstName" => "Lael",         "LastName" => "Albert",     "Email" => "egestas.urna@iaculis.co.uk",                    "Password" => "PDG41MHY7XT",    "DateCreated" => "2016-03-09"]);
        User::firstOrCreate(["FirstName" => "Colin",        "LastName" => "Hurst",      "Email" => "auctor@ipsumcursusvestibulum.net",              "Password" => "GBB2015QFE1FH",  "DateCreated" => "2016-10-10"]);
        User::firstOrCreate(["FirstName" => "Melinda",      "LastName" => "Medina",     "Email" => "molestie.pharetra@sempercursusInteger.co.uk",   "Password" => "ULL19PPP1GU",    "DateCreated" => "2016-03-19"]);
        User::firstOrCreate(["FirstName" => "Tamara",       "LastName" => "Hayden",     "Email" => "ut.nulla.Cras@Maecenas.ca",                     "Password" => "KVT53XSS0ER",    "DateCreated" => "2015-01-11"]);
        User::firstOrCreate(["FirstName" => "Cassady",      "LastName" => "Grant",      "Email" => "diam.Duis.mi@Nuncullamcorper.net",              "Password" => "MUZ23VRJ0KR",    "DateCreated" => "2017-05-06"]);
        User::firstOrCreate(["FirstName" => "Cooper",       "LastName" => "Rich",       "Email" => "egestas.rhoncus@pede.com",                      "Password" => "RTF02RZW2EY",    "DateCreated" => "2016-12-08"]);
        User::firstOrCreate(["FirstName" => "Olivia",       "LastName" => "Berger",     "Email" => "amet.faucibus.ut@urnanecluctus.com",            "Password" => "PNS05XQR1JL",    "DateCreated" => "2017-10-09"]);
        User::firstOrCreate(["FirstName" => "Mariam",       "LastName" => "Mcintyre",   "Email" => "habitant@bibendum.co.uk",                       "Password" => "YOH90GJH4MQ",    "DateCreated" => "2016-03-27"]);
        User::firstOrCreate(["FirstName" => "Shana",        "LastName" => "Mullen",     "Email" => "aliquet.Proin@primisinfaucibus.org",            "Password" => "FMG93XQR3ZN",    "DateCreated" => "2017-09-25"]);
        User::firstOrCreate(["FirstName" => "Nell",         "LastName" => "Landry",     "Email" => "ipsum.non.arcu@dignissimtempor.net",            "Password" => "UCO69WHK8VY",    "DateCreated" => "2016-06-03"]);
        User::firstOrCreate(["FirstName" => "Donna",        "LastName" => "Hester",     "Email" => "eget@tortorNunc.net",                           "Password" => "KYZ11LCA5QW",    "DateCreated" => "2016-09-27"]);
        User::firstOrCreate(["FirstName" => "Charity",      "LastName" => "Mcpherson",  "Email" => "et.arcu@erosNamconsequat.org",                  "Password" => "KME62ZBX1VQ",    "DateCreated" => "2016-05-24"]);
        User::firstOrCreate(["FirstName" => "Violet",       "LastName" => "Murphy",     "Email" => "pede@id.org",                                   "Password" => "IIM26TQI5ZO",    "DateCreated" => "2017-03-04"]);
        User::firstOrCreate(["FirstName" => "Petra",        "LastName" => "Lane",       "Email" => "Pellentesque@luctusetultrices.edu",             "Password" => "UJH55JTJ8WA",    "DateCreated" => "2016-05-07"]);
        User::firstOrCreate(["FirstName" => "Martin",       "LastName" => "Price",      "Email" => "ullamcorper.velit@Morbi.org",                   "Password" => "HZU48WVW7ND",    "DateCreated" => "2016-09-16"]);
        User::firstOrCreate(["FirstName" => "Doris",        "LastName" => "Roberts",    "Email" => "luctus.ut.pellentesque@liberoProin.net",        "Password" => "XVA06APF6TH",    "DateCreated" => "2017-12-19"]);
        User::firstOrCreate(["FirstName" => "Sasha",        "LastName" => "Carroll",    "Email" => "ipsum.dolor.sit@loremauctorquis.net",           "Password" => "BCS87UJZ8MC",    "DateCreated" => "2016-04-16"]);
        User::firstOrCreate(["FirstName" => "Anastasia",    "LastName" => "Spears",     "Email" => "lectus.justo.eu@mauris.com",                    "Password" => "VDV24JAO4VV",    "DateCreated" => "2016-03-13"]);
        User::firstOrCreate(["FirstName" => "Mariam",       "LastName" => "Franco",     "Email" => "eu@anteNunc.net",                               "Password" => "OYK47HNZ1LC",    "DateCreated" => "2016-08-24"]);
        User::firstOrCreate(["FirstName" => "Lisandra",     "LastName" => "Moody",      "Email" => "et.commodo.at@elitpede.edu",                    "Password" => "KIO54KBE0TD",    "DateCreated" => "2017-07-30"]);
        User::firstOrCreate(["FirstName" => "Bianca",       "LastName" => "Erickson",   "Email" => "quis.turpis.vitae@luctus.com",                  "Password" => "ZUQ86JYZ1RB",    "DateCreated" => "2015-01-12"]);
        User::firstOrCreate(["FirstName" => "Pearl",        "LastName" => "Goodman",    "Email" => "sem@malesuadavelvenenatis.edu",                 "Password" => "SCM22BIZ1TR",    "DateCreated" => "2017-08-15"]);
        User::firstOrCreate(["FirstName" => "Keegan",       "LastName" => "Burns",      "Email" => "convallis@ligulaconsectetuer.co.uk",            "Password" => "GFT79JXP5DZ",    "DateCreated" => "2016-04-14"]);
        User::firstOrCreate(["FirstName" => "Taylor",       "LastName" => "Mcgee",      "Email" => "scelerisque@orciUt.ca",                         "Password" => "ZHI07XLO2IP",    "DateCreated" => "2017-10-23"]);
        User::firstOrCreate(["FirstName" => "September",    "LastName" => "Higgins",    "Email" => "nascetur.ridiculus.mus@vitaeerat.ca",           "Password" => "VRE71UYZ3SB",    "DateCreated" => "2016-12-04"]);
        User::firstOrCreate(["FirstName" => "Vincent",      "LastName" => "Austin",     "Email" => "malesuada.Integer@insodales.edu",               "Password" => "DRI03MYQ6OE",    "DateCreated" => "2016-05-22"]);
        User::firstOrCreate(["FirstName" => "Jaime",        "LastName" => "Barnett",    "Email" => "tellus.faucibus@auguescelerisque.com",          "Password" => "LDJ86IVZ3RR",    "DateCreated" => "2017-06-15"]);
        User::firstOrCreate(["FirstName" => "Herman",       "LastName" => "Barnett",    "Email" => "vulputate@aptenttacitisociosqu.edu",            "Password" => "APU34LLN2OV",    "DateCreated" => "2016-06-11"]);
        User::firstOrCreate(["FirstName" => "Emma",         "LastName" => "Kirby",      "Email" => "nascetur.ridiculus.mus@orciluctuset.ca",        "Password" => "ITS08CRW2RS",    "DateCreated" => "2017-05-04"]);
        User::firstOrCreate(["FirstName" => "Tiger",        "LastName" => "Rowe",       "Email" => "massa.non@ipsum.org",                           "Password" => "NHF27IHY3GX",    "DateCreated" => "2017-01-12"]);
        User::firstOrCreate(["FirstName" => "Jeanette",     "LastName" => "Gates",      "Email" => "rhoncus.Donec.est@Aliquameratvolutpat.com",     "Password" => "AHF92XTB6BR",    "DateCreated" => "2017-07-28"]);
        User::firstOrCreate(["FirstName" => "Renee",        "LastName" => "Workman",    "Email" => "gravida@diam.co.uk",                            "Password" => "EQY94EIP9WH",    "DateCreated" => "2016-12-22"]);
        User::firstOrCreate(["FirstName" => "Asher",        "LastName" => "Fitzpatrick","Email" => "massa.lobortis@dolor.co.uk",                    "Password" => "YEX97CWM3BK",    "DateCreated" => "2015-01-31"]);
        User::firstOrCreate(["FirstName" => "Montana",      "LastName" => "Hurst",      "Email" => "mauris@sagittis.co.uk",                         "Password" => "BXR10QAF4OS",    "DateCreated" => "2016-08-22"]);
        User::firstOrCreate(["FirstName" => "Ora",          "LastName" => "Puckett",    "Email" => "odio@mifringilla.edu",                          "Password" => "CID99NDH4KU",    "DateCreated" => "2017-03-06"]);
        User::firstOrCreate(["FirstName" => "Ramona",       "LastName" => "Fields",     "Email" => "in.aliquet@Curabitursed.edu",                   "Password" => "AZW65RJD0VP",    "DateCreated" => "2016-11-21"]);
        User::firstOrCreate(["FirstName" => "Aretha",       "LastName" => "Richards",   "Email" => "per.inceptos.hymenaeos@rhoncusNullamvelit.edu", "Password" => "FUM08QWH1KT",    "DateCreated" => "2016-07-19"]);
        User::firstOrCreate(["FirstName" => "Kameko",       "LastName" => "Zimmerman",  "Email" => "felis@antedictum.net",                          "Password" => "GWB48TWS9QB",    "DateCreated" => "2017-05-25"]);
        User::firstOrCreate(["FirstName" => "Shafira",      "LastName" => "Baird",      "Email" => "Cras.dolor.dolor@semegestas.ca",                "Password" => "GXT01XNR3IE",    "DateCreated" => "2017-10-22"]);
        User::firstOrCreate(["FirstName" => "Stacy",        "LastName" => "Meadows",    "Email" => "est.mollis@arcu.co.uk",                         "Password" => "JFG88YJV4QC",    "DateCreated" => "2016-12-01"]);
        User::firstOrCreate(["FirstName" => "Uriah",        "LastName" => "Velasquez",  "Email" => "nonummy@luctus.edu",                            "Password" => "WUO58QOG8AJ",    "DateCreated" => "2016-04-15"]);
        User::firstOrCreate(["FirstName" => "Hilary",       "LastName" => "Dixon",      "Email" => "vulputate@velitegestaslacinia.co.uk",           "Password" => "ZTH13LTT8FJ",    "DateCreated" => "2017-10-28"]);
        User::firstOrCreate(["FirstName" => "Jerry",        "LastName" => "Cherry",     "Email" => "malesuada.ut.sem@consequat.com",                "Password" => "KKQ84BQA3JH",    "DateCreated" => "2016-11-15"]);
        User::firstOrCreate(["FirstName" => "Curran",       "LastName" => "Coffey",     "Email" => "tellus.eu.augue@malesuadavel.org",              "Password" => "LAH90WSM0BQ",    "DateCreated" => "2017-03-07"]);
        User::firstOrCreate(["FirstName" => "Quinlan",      "LastName" => "Obrien",     "Email" => "feugiat.placerat@convallis.org",                "Password" => "BYA60JJT8AZ",    "DateCreated" => "2017-10-30"]);
        User::firstOrCreate(["FirstName" => "Alan",         "LastName" => "Livingston", "Email" => "mollis@duiinsodales.co.uk",                     "Password" => "BAQ21RYY0XZ",    "DateCreated" => "2017-01-07"]);
        User::firstOrCreate(["FirstName" => "Nerea",        "LastName" => "Mendez",     "Email" => "nascetur.ridiculus.mus@tempordiamdictum.org",   "Password" => "CQB11BEY1TJ",    "DateCreated" => "2016-05-27"]);
        User::firstOrCreate(["FirstName" => "Sarah",        "LastName" => "Sosa",       "Email" => "nisi.magna@sitamet.com",                        "Password" => "HBX55BGQ5FI",    "DateCreated" => "2016-03-26"]);
        User::firstOrCreate(["FirstName" => "Jayme",        "LastName" => "Cunningham", "Email" => "non.magna.Nam@eleifendnondapibus.com",          "Password" => "VNA12BZL3KT",    "DateCreated" => "2017-06-22"]);
        User::firstOrCreate(["FirstName" => "Orli",         "LastName" => "Mclean",     "Email" => "est.congue.a@orci.org",                         "Password" => "JQE46IZN9UP",    "DateCreated" => "2016-05-11"]);
        User::firstOrCreate(["FirstName" => "Lewis",        "LastName" => "Hendricks",  "Email" => "sem.molestie@amifringilla.edu",                 "Password" => "FGY2016FJM1OO",  "DateCreated" => "2016-10-22"]);
        User::firstOrCreate(["FirstName" => "Roth",         "LastName" => "Garner",     "Email" => "magnis.dis@Morbinon.edu",                       "Password" => "BNL2017WIW0MO",  "DateCreated" => "2015-01-16"]);
        User::firstOrCreate(["FirstName" => "Keegan",       "LastName" => "Hancock",    "Email" => "Praesent.luctus@odio.edu",                      "Password" => "COZ01FRN2GC",    "DateCreated" => "2015-03-08"]);
        User::firstOrCreate(["FirstName" => "Troy",         "LastName" => "Wilkins",    "Email" => "elementum@nullaIn.com",                         "Password" => "GUK40YZN9TV",    "DateCreated" => "2017-03-02"]);
        User::firstOrCreate(["FirstName" => "Mikayla",      "LastName" => "Chandler",   "Email" => "fames@turpisegestas.co.uk",                     "Password" => "APM43ZTM5AY",    "DateCreated" => "2017-06-10"]);
        User::firstOrCreate(["FirstName" => "Yoshi",        "LastName" => "Sullivan",   "Email" => "est.congue.a@IncondimentumDonec.edu",           "Password" => "CBE63AJR4KZ",    "DateCreated" => "2016-12-07"]);
        User::firstOrCreate(["FirstName" => "Jaden",        "LastName" => "Ramos",      "Email" => "rutrum.magna.Cras@diam.co.uk",                  "Password" => "APN65QTW3ZO",    "DateCreated" => "2017-12-15"]);
        User::firstOrCreate(["FirstName" => "Flynn",        "LastName" => "Barnett",    "Email" => "nisl.Maecenas.malesuada@tempus.com",            "Password" => "WEJ03CNG3MY",    "DateCreated" => "2016-06-26"]);
        User::firstOrCreate(["FirstName" => "Jerry",        "LastName" => "Villarreal", "Email" => "eu@fermentumrisus.edu",                         "Password" => "GSC05EUI3OH",    "DateCreated" => "2016-09-19"]);
        User::firstOrCreate(["FirstName" => "Gray",         "LastName" => "Wade",       "Email" => "cursus.et@Donecat.net",                         "Password" => "BCH41UBV8LQ",    "DateCreated" => "2016-03-14"]);
        User::firstOrCreate(["FirstName" => "Steven",       "LastName" => "Glass",      "Email" => "sem@Nuncuterat.org",                            "Password" => "PCA22ZPG9AA",    "DateCreated" => "2016-09-26"]);
        User::firstOrCreate(["FirstName" => "Davis",        "LastName" => "Clayton",    "Email" => "nec.eleifend@Proin.edu",                        "Password" => "EMQ99WVH3HE",    "DateCreated" => "2017-07-08"]);
        User::firstOrCreate(["FirstName" => "Fletcher",     "LastName" => "Barnes",     "Email" => "et.arcu@eleifendCrassed.co.uk",                 "Password" => "PKW71XXN5CO",    "DateCreated" => "2016-06-20"]);
    }
}
