<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        tr:nth-child(4n+1), tr:nth-child(4n+2) {
            background-color: #e4e4e4;
            border-collapse: collapse;

        }

        table, tr {
            /*border-collapse:separate;*/
            border: solid black 1px;
            /*border-radius:6px;*/
            /*-moz-border-radius:6px;*/
        }

        tr {
            height: 50px;
            font-family: "Comic Sans MS", cursive, sans-serif;

        }

        #results_title {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 50px;
            color: green;

        }

        #order_by_title {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 20px;
            color: saddlebrown;

        }

        table {
            width: 50%;
            float: left;
            margin-left: 20px;
        }


        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 50%;
            position: fixed;
            top: 0;
            width: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 70%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .sticky {
            position: fixed;
            z-index: 2;
            color: darkblue;
            font-family: "Courier New", Courier, monospace;
            margin-left: 76%; /* adjust this depending on the width of screen to fit everything on page */
            /*zoom: 80%;*/
        }

        #all {
            zoom: 80%;
        }

    </style>

</head>
<?php
/**
 * Created by PhpStorm.
 * User: codyp
 * Date: 2/12/20
 * Time: 5:00 PM
 */

$text = '{
   "html_attributions" : [],
   "next_page_token" : "CoQC9AAAAKEtpWX2ojSm_z2DaoRxLabsOM09Lk0JyPvNPjh9PMcsa8LieYU9FlQTBs4qpT7C3NhkiatBPUlA4GAmHDWzdvZ3DelD2KxcsuScOujfxuhm0nkvvVeIdBvXR88tJMEEH9OaxEocmb6OaG2k-kN9WeCdMU-WpVMndYw7wSEcYaduVCqeAkFIlSoqyhNx-c8RNzPISmjhbVNXNk_h3tN7Fhhq1IhCZLY6kd6J1mBoUeDhdpqWiQ4vIxEt_O1qGMUaYZWDrCG_RjNJJ1JNQnUXq2gKSXb7wGKUsb0mOk7K6PcDXhbRjniESgA_Mrfj4sJVhIR4xYtDggUKXwycmv1WvpgSEG6TT_FgMhLj_G9mxI_g0rsaFD_2rVB4z6RyzFMwsM-zRkMBoz58",
   "results" : [
      {
         "formatted_address" : "1800 Imeson Rd, Jacksonville, FL 32220, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3456036,
               "lng" : -81.7727324
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.34695307989272,
                  "lng" : -81.77140067010727
               },
               "southwest" : {
                  "lat" : 30.34425342010728,
                  "lng" : -81.7741003298927
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "5e3eb285c2414f9c888e7b7c8d8bd66e26c217f3",
         "name" : "Jacksonville-Baldwin Rail Trail",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 2340,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/117524217226257222951\"\u003eDENISE Mcguire\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAjrjKHaMFB8fNdr55XmyHi9z5SE7LQYCyqdUZpHcBrJCr1eW1fC1gHWTGXTHwszahHxH8XzviZU8e3szNlaIiBwBjBmbUnqRkhUN8eh6zPCKp0Smpot9nb_BRK_c9uOblEhD38gsFjcVRp4z3C-XkyOlyGhRwAyc6aLRoHXGNQaPsTtJ5XCCrIw",
               "width" : 4160
            }
         ],
         "place_id" : "ChIJ7X6sm0655YgR0hZlg7Tq6eU",
         "plus_code" : {
            "compound_code" : "86WG+6W Northwest, Jacksonville, FL",
            "global_code" : "862W86WG+6W"
         },
         "rating" : 4.7,
         "reference" : "ChIJ7X6sm0655YgR0hZlg7Tq6eU",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 300
      },
      {
         "formatted_address" : "Recreation and Wellness, 1 S U N F Dr Bldg 61, Rm 1200, Jacksonville, FL 32224, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.2661172,
               "lng" : -81.5120362
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.26746522989272,
                  "lng" : -81.51068747010727
               },
               "southwest" : {
                  "lat" : 30.26476557010728,
                  "lng" : -81.51338712989271
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "f667154096554662e1cc29ca94100824f26b3589",
         "name" : "University Of North Florida Nature Trails",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 3024,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/100060588522936817197\"\u003eJeremy Bailey\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAbpldx6HwOQeQz-B5SXgo-0XcFJ7WsyQXfsxNox9txBc3yO12X43A-UV-nAJojKTFARMAzqzK2XxEww_61-F9sSAeu381C4CnESRbpM7FeQjCGQUK6PxxFEYLN1GB5FM1EhAsPT32lLWV00kGPE7Tgw6JGhRmQa-682k4EFgVQMT3OWUxX9n-mA",
               "width" : 4032
            }
         ],
         "place_id" : "ChIJ9yTxRbJK5IgREhdHrLKfRtQ",
         "plus_code" : {
            "compound_code" : "7F8Q+C5 Southside, Jacksonville, FL",
            "global_code" : "862W7F8Q+C5"
         },
         "rating" : 4.6,
         "reference" : "ChIJ9yTxRbJK5IgREhdHrLKfRtQ",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 143
      },
      {
         "formatted_address" : "Jacksonville, FL 32225, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.36992769999999,
               "lng" : -81.48331829999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.37146072989272,
                  "lng" : -81.48237259999999
               },
               "southwest" : {
                  "lat" : 30.36876107010728,
                  "lng" : -81.48615540000002
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "b72ec5771fa61eabb50377e504d6221e0addf7be",
         "name" : "Timucan Preserve parking for trails",
         "photos" : [
            {
               "height" : 2268,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/108753396808754943852\"\u003eShriram Sadashivajois\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAdjotPWXXRZRGnEZGyna4mWgqYHUO4JcvJuz48X32LjA4Ik1N8ZiSkH6m5JfrJvj3Cr84Bq7E_8r5k4lt0LIk--Vh5UUmbQ7bi6J8Rv7PKxeSYvEklPhIy7AOESaveIlYEhCof75fRzsRa5zzamk0kHu7GhQbEzD6p6hA59Ep6tUQqCWskrcPBw",
               "width" : 4032
            }
         ],
         "place_id" : "ChIJ26EI8e1M5IgRa9Q2_yTYwKs",
         "plus_code" : {
            "compound_code" : "9G98+XM Arlington, Jacksonville, FL",
            "global_code" : "862W9G98+XM"
         },
         "rating" : 4.5,
         "reference" : "ChIJ26EI8e1M5IgRa9Q2_yTYwKs",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 23
      },
      {
         "formatted_address" : "1445 Millcoe Rd, Jacksonville, FL 32225, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.345408,
               "lng" : -81.540409
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.34673122989272,
                  "lng" : -81.53909852010727
               },
               "southwest" : {
                  "lat" : 30.34403157010728,
                  "lng" : -81.54179817989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "08dd1ef953a95031f48fdb6e573d799cd7703b51",
         "name" : "Jacksonville Arboretum & Gardens",
         "opening_hours" : {
            "open_now" : false
         },
         "photos" : [
            {
               "height" : 2448,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/116479534243891540019\"\u003eMatt Cornett\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAVy7QKAW15N9jWbKFVPpuDIoFD1HPb_eOGz_HuB4pkwg3e6_g1ZLRZ1XMofGJX13F7r3auzbAHyQ09l93IP5N29xY313nNG7Ic3zGt-zgU3GDhDYOKmWP9bc3dwbUd-MDEhBxQ9KUQYrV0Rw_RhPZ1Ba_GhQw2aJWFq0KvhKRopFS1b_fTQv9RA",
               "width" : 3264
            }
         ],
         "place_id" : "ChIJ6_k9TmCz5YgRZoTCykSG8rA",
         "plus_code" : {
            "compound_code" : "8FW5+5R Arlington, Jacksonville, FL",
            "global_code" : "862W8FW5+5R"
         },
         "rating" : 4.8,
         "reference" : "ChIJ6_k9TmCz5YgRZoTCykSG8rA",
         "types" : [ "tourist_attraction", "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 1357
      },
      {
         "formatted_address" : "2201-2299 Boulevard, Jacksonville, FL 32206, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3514308,
               "lng" : -81.66124139999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.35278687989272,
                  "lng" : -81.65986487010727
               },
               "southwest" : {
                  "lat" : 30.35008722010727,
                  "lng" : -81.66256452989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "b05aaa9d1d795546cbfc7553295680bd37e02cc1",
         "name" : "S-Line Urban Greenway Boulevard St Trailhead",
         "place_id" : "ChIJE4IHAzO35YgRLrL48weEzYE",
         "plus_code" : {
            "compound_code" : "982Q+HG Urban Core, Jacksonville, FL",
            "global_code" : "862W982Q+HG"
         },
         "rating" : 0,
         "reference" : "ChIJE4IHAzO35YgRLrL48weEzYE",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 0
      },
      {
         "formatted_address" : "4499 Yachtsman Way, Jacksonville, FL 32277, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3848601,
               "lng" : -81.61592829999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.38621112989272,
                  "lng" : -81.61457722010728
               },
               "southwest" : {
                  "lat" : 30.38351147010728,
                  "lng" : -81.61727687989273
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "e10380a62a4e1cb7e533668db3e170dcc0b5ae14",
         "name" : "Reddie Point Preserve",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 4000,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/104754596735892902603\"\u003eChristine Knoll\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAis0eP6UaSh8WgRL1wum1PPviYr8z2vaeQrXEwTk7YsPGPzf_C0kxpY2NmDOA5jD5Jn16jOfdDBYPQGxL6If3Bj_abpacn7OcqFF7nyAZ8hIx_HFGKAMqZEA9YrV9glh2EhBCvh2VwrAk03OYNULMc2J7GhQSNZCamxQZmYWjinXaRbAnvc9aHQ",
               "width" : 3000
            }
         ],
         "place_id" : "ChIJm8F_rHGx5YgRSpBZkPwliDM",
         "plus_code" : {
            "compound_code" : "99MM+WJ Arlington, Jacksonville, FL",
            "global_code" : "862W99MM+WJ"
         },
         "rating" : 4.5,
         "reference" : "ChIJm8F_rHGx5YgRSpBZkPwliDM",
         "types" : [ "park", "tourist_attraction", "point_of_interest", "establishment" ],
         "user_ratings_total" : 287
      },
      {
         "formatted_address" : "Jacksonville, FL 32225, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3841835,
               "lng" : -81.49568239999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.38567967989272,
                  "lng" : -81.49458852010727
               },
               "southwest" : {
                  "lat" : 30.38298002010728,
                  "lng" : -81.49728817989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "01ae30e97d6b672a9961526121b4f488d0d261c8",
         "name" : "Spanish Pond Trailhead",
         "opening_hours" : {
            "open_now" : false
         },
         "photos" : [
            {
               "height" : 3024,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/109570465359916261168\"\u003eKatie Williams\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAJH9MOBGf3SNVY3STgsvri1zQ4dvahqg6D95_QK6yTVDwPY0woc0X9WOGX_JZyM4CS8goSlBpfeQsXr36yTPE8KBL5DPMZiTtBSA18p5VPR68JkzR5e6sB4pzwr2AFAYOEhCTg1mPaUTODcfHMGcvgVXzGhQMN4T-PIXPJVmauoEVYrkcCBcz_w",
               "width" : 4032
            }
         ],
         "place_id" : "ChIJ6UPVbt5M5IgRIaN4ar_ci6s",
         "plus_code" : {
            "compound_code" : "9GM3+MP Arlington, Jacksonville, FL",
            "global_code" : "862W9GM3+MP"
         },
         "rating" : 4.8,
         "reference" : "ChIJ6UPVbt5M5IgRIaN4ar_ci6s",
         "types" : [ "tourist_attraction", "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 66
      },
      {
         "formatted_address" : "13165 Mt Pleasant Rd, Jacksonville, FL 32225, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3705866,
               "lng" : -81.484993
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.37189347989272,
                  "lng" : -81.48375127010728
               },
               "southwest" : {
                  "lat" : 30.36919382010727,
                  "lng" : -81.48645092989273
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "42ecca546e1f652d87a8faf479f534683d21ca12",
         "name" : "Theodore Roosevelt Area at Timucuan Preserve",
         "opening_hours" : {
            "open_now" : false
         },
         "photos" : [
            {
               "height" : 2208,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/116467124937875997437\"\u003eJohn Yowan\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAANxuTpkt9reP9viMkWlXJ7wkDEe5_FD4aj4Cwocho8HnGGQyenFk3HY1c5rJbWsQP5qD-5UMh7cKAOn3civLkURHHIaKXIj1RsFCs1a6LZKNA-WjHBhud0nSIG0mYjmfKEhDe3Ly4s33BmyZKZ8PsFKmpGhQn3WFH8zrxo0PYZcTVFoF_5_ue3Q",
               "width" : 1242
            }
         ],
         "place_id" : "ChIJQzqP0O1M5IgRFeRdWT5rD_k",
         "plus_code" : {
            "compound_code" : "9GC8+62 Arlington, Jacksonville, FL",
            "global_code" : "862W9GC8+62"
         },
         "rating" : 4.7,
         "reference" : "ChIJQzqP0O1M5IgRFeRdWT5rD_k",
         "types" : [ "tourist_attraction", "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 72
      },
      {
         "formatted_address" : "30°30\'06. 81°27\'06., 2 3rd St, Atlantic Beach, FL 32233, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.501728,
               "lng" : -81.45175499999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.50309147989271,
                  "lng" : -81.45042137010728
               },
               "southwest" : {
                  "lat" : 30.50039182010727,
                  "lng" : -81.45312102989271
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "d7496404a93b43b514e058e308fe9b0e78153192",
         "name" : "Buccaneer Trail",
         "photos" : [
            {
               "height" : 4000,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/102912266970830215983\"\u003eJonathan Sheckels\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAArBTGnTme9WdOJV4d684BGPqDgCoRl_sBib4au_L0BmydxKvF5vp_yorxCWpi1Dv06IVdCIMaXQb694jSuCCwxyg6GpL_O-X4T-SkKylBQnZawUz8UgD57Go9vkX85ffcEhDe4tq9Q8VR4rn5LdtsSAlJGhS1NFmPUUvedPsG2tZ4Xr3BPzf8sw",
               "width" : 6000
            }
         ],
         "place_id" : "ChIJeW3VbJVT5IgRCLRnfY64OSM",
         "plus_code" : {
            "compound_code" : "GG2X+M7 Northside, Jacksonville, FL",
            "global_code" : "862WGG2X+M7"
         },
         "rating" : 5,
         "reference" : "ChIJeW3VbJVT5IgRCLRnfY64OSM",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 7
      },
      {
         "formatted_address" : "Jacksonville, FL 32225, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3852614,
               "lng" : -81.4986658
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.38651887989272,
                  "lng" : -81.49676807010728
               },
               "southwest" : {
                  "lat" : 30.38381922010727,
                  "lng" : -81.49946772989271
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "bb29dbc95a76c36674bde8b31777d7583707ca69",
         "name" : "Nature Trail",
         "opening_hours" : {
            "open_now" : false
         },
         "photos" : [
            {
               "height" : 6720,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/117061967615030933731\"\u003eA Google User\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAYEDhc1c7anz7uXhu2at5Aj0aK0tkVGWCSLG2Xtk7whxyLQztxn1sZbTj3ncnsgjCakKJaH5glfPfwfjKwOK5qGBlS9e2l0T8syPy4Yv6qK4dFME1MK3zrF4iYx8QhzS6EhBL_AOiAqNaXnnt7MwZVyn9GhQuEiiR6nWiVyLVNbJm2rt_DIgglg",
               "width" : 4480
            }
         ],
         "place_id" : "ChIJx5lFVn1N5IgRR08aC8FFjE8",
         "plus_code" : {
            "compound_code" : "9GP2+4G Arlington, Jacksonville, FL",
            "global_code" : "862W9GP2+4G"
         },
         "rating" : 5,
         "reference" : "ChIJx5lFVn1N5IgRR08aC8FFjE8",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 1
      },
      {
         "formatted_address" : "10013 Anders Blvd, Jacksonville, FL 32246, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.278133,
               "lng" : -81.55243299999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.27942352989272,
                  "lng" : -81.55108227010727
               },
               "southwest" : {
                  "lat" : 30.27672387010728,
                  "lng" : -81.55378192989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "83c56236f91cb1a9e766dd87c9c07a61137720db",
         "name" : "The Beach and Peach Urban Bike Park",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 3456,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/102652283418558696093\"\u003ePamela Turner-Steel\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAuRBbjtZfJY_j-y5pNL6eTIgBP84_hQqWLmtvpM3X7r_kqR86turyAE7L6dm_sYyp1GZ5GMCi3f6KIVUO4iunese5AqA22qTU4YtEUcGH5HKbstJxcD9G610_EicdJKMzEhDvztbs4BjyE7tLcpzGidgXGhQPNY3AjGTcKNsldF_ncrFnp6mtvw",
               "width" : 4608
            }
         ],
         "place_id" : "ChIJoQcLlg615YgRskG4JV4wAfs",
         "plus_code" : {
            "compound_code" : "7CHX+72 Southside, Jacksonville, FL",
            "global_code" : "862W7CHX+72"
         },
         "rating" : 4.3,
         "reference" : "ChIJoQcLlg615YgRskG4JV4wAfs",
         "types" : [ "tourist_attraction", "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 84
      },
      {
         "formatted_address" : "Norman St, Jacksonville, FL 32244, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.2268207,
               "lng" : -81.7020723
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.22817087989272,
                  "lng" : -81.70072227010726
               },
               "southwest" : {
                  "lat" : 30.22547122010727,
                  "lng" : -81.70342192989271
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "967eda052d046228949aebe57c91808690fab21d",
         "name" : "Tillie K. Fowler Regional Park",
         "photos" : [
            {
               "height" : 2576,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/107681480871905038127\"\u003emChris LeDuc\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAWw5eqeIu2PhrGsnPc8FaGGtv1Hp5UoLDbzCT7YyLIh1rxVRQo-Xf8UACeQxLpLYqcXq9OWe4S1Js8-ilxSsq52DVfnOn69PxagzbB804OnO18Lh2AVL0DlZrAL5z4-WdEhDwwl2rzQ56vPv0yDmuDEMOGhQEk4Kp4ln5jTUtEJepTzoc_w28lg",
               "width" : 1932
            }
         ],
         "place_id" : "ChIJbyv619HH5YgRuu2NssqpRjU",
         "plus_code" : {
            "compound_code" : "67GX+P5 Southwest Jacksonville, Jacksonville, FL",
            "global_code" : "862W67GX+P5"
         },
         "rating" : 4.6,
         "reference" : "ChIJbyv619HH5YgRuu2NssqpRjU",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 23
      },
      {
         "formatted_address" : "13130 Bartram Park Blvd, Jacksonville, FL 32223, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.1291252,
               "lng" : -81.5443164
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.13118875000001,
                  "lng" : -81.54233147010727
               },
               "southwest" : {
                  "lat" : 30.12843734999999,
                  "lng" : -81.54503112989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "532262fba78bbef19136899e2c66666d35788b5a",
         "name" : "Julington Durbin Creek Nature Preserve",
         "photos" : [
            {
               "height" : 4032,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/113449296334962529226\"\u003eA Google User\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAA-skQuw-2XCEybaiIJbVonGr868ZTHTH0Cy5xBnTpW1tw8x5wOkGhMM0V0ad76SLCH0_FU8dddPYhYFb8G7aT6kZtw270apaUzRUk3dUZYYsYm338oeEH1TUBPlyncNgAEhAl7sMuyCs8U4A-fELIrcZDGhRLkDy7HBLmzHApsmn5VT_JoqHeAA",
               "width" : 3024
            }
         ],
         "place_id" : "ChIJEfmeXO_M5YgRZfsd6aRO67w",
         "plus_code" : {
            "compound_code" : "4FH4+M7 Southside, Jacksonville, FL",
            "global_code" : "862W4FH4+M7"
         },
         "rating" : 4.5,
         "reference" : "ChIJEfmeXO_M5YgRZfsd6aRO67w",
         "types" : [ "tourist_attraction", "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 331
      },
      {
         "formatted_address" : "210 Davis Park Rd, Ponte Vedra Beach, FL 32081, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.10937169999999,
               "lng" : -81.39263640000001
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.11074967989272,
                  "lng" : -81.39129747010728
               },
               "southwest" : {
                  "lat" : 30.10805002010728,
                  "lng" : -81.39399712989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "fb61c78f34b68c1514ab83381fa70a12e38712af",
         "name" : "Nocatee Preserve Trail Head",
         "photos" : [
            {
               "height" : 4032,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/114190822758404423993\"\u003eShawn Collins\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAJSkYSITxGKHBBtcMcB2JawnhkzP1HrJkYvHtyzj3smvyrDyOogGFQ08GwJhYRi58ZpcouZ69b2_VPD9cIEhQ9p50nUW5JscRyqtfkC40LLa-lSqHsFeYijm23Wh8mHBMEhBz-GAMxv3ZyQwzaSn4OzqXGhT9WQld8IbQLBFFrWxsbjQtl9wmFg",
               "width" : 3024
            }
         ],
         "place_id" : "ChIJ0_eOpQcx5IgRmwF1mBlECNo",
         "plus_code" : {
            "compound_code" : "4J54+PW Nocatee, Florida",
            "global_code" : "862W4J54+PW"
         },
         "rating" : 4.4,
         "reference" : "ChIJ0_eOpQcx5IgRmwF1mBlECNo",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 31
      },
      {
         "formatted_address" : "1380 Otis Rd, Jacksonville, FL 32220, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.334425,
               "lng" : -81.902553
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.33566917989272,
                  "lng" : -81.90131702010727
               },
               "southwest" : {
                  "lat" : 30.33296952010728,
                  "lng" : -81.90401667989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "6a0b92677b0ea267e41c8465d14ab87c0bde9825",
         "name" : "Jacksonville Baldwin Rail Trail",
         "photos" : [
            {
               "height" : 2988,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/112250066117311456429\"\u003eA Google User\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAlX1-WVoqOwW56tlC4t95uurxTQalIJ-4f3nYv2noKF6PSHXut-wIG8PSEff0tkobnujb2ZHDRRqTa3p9RHhDp09EZu9FOwk7j1TSB1Myd3Nm2VuUf0Nc6WF1iUZ7ktI8EhAJmDjKw74tPZqJ7A83ehsPGhRwVp3tXkjTd9Ut5K5WXZj1oXkthg",
               "width" : 5312
            }
         ],
         "place_id" : "ChIJweYdJ66V5YgRXQijrkonS4k",
         "plus_code" : {
            "compound_code" : "83MW+QX Southwest Jacksonville, Jacksonville, FL",
            "global_code" : "862W83MW+QX"
         },
         "rating" : 4.6,
         "reference" : "ChIJweYdJ66V5YgRXQijrkonS4k",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 51
      },
      {
         "formatted_address" : "635 E 3rd St, Jacksonville, FL 32206, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.3397284,
               "lng" : -81.65997519999999
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.34102542989272,
                  "lng" : -81.65837847010728
               },
               "southwest" : {
                  "lat" : 30.33832577010728,
                  "lng" : -81.66107812989272
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "741ac3ecd2de01b01e99d9c6069c28d3b3a7f527",
         "name" : "Henry J. Klutho Park",
         "opening_hours" : {},
         "photos" : [
            {
               "height" : 4032,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/115627285465178926762\"\u003eMike King\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAknGFkuJ1FEluFACTknKYt1eXF2MgfZcrAMXeI8GvfsgnSkmbvIfyioISKi7Btv3rpOO516Ub_TVKAfTOvtMSgdXjRzaIfBAgcrPns9oUAv4_ZjHV6y1kJJF46wp0HXbOEhD6MJOa_LIj8E9qcTN4tkBpGhS0_wZNyokkNUOZ1qtSkSrcdH2f2A",
               "width" : 3024
            }
         ],
         "place_id" : "ChIJQRkj5zq35YgR_AMEMuulua4",
         "plus_code" : {
            "compound_code" : "88QR+V2 Urban Core, Jacksonville, FL",
            "global_code" : "862W88QR+V2"
         },
         "rating" : 4.4,
         "reference" : "ChIJQRkj5zq35YgR_AMEMuulua4",
         "types" : [ "park", "point_of_interest", "establishment" ],
         "user_ratings_total" : 192
      },
      {
         "formatted_address" : "2885 San Pablo Rd S, Jacksonville, FL 32225, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.2961292,
               "lng" : -81.4376879
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.29747837989272,
                  "lng" : -81.43641452010726
               },
               "southwest" : {
                  "lat" : 30.29477872010728,
                  "lng" : -81.43911417989271
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "87d9fd01d5e638348049eb69d2e1a728c7f80cfa",
         "name" : "Castaway Island Preserve",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 3120,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/114819790614737600466\"\u003eDevvy V\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAAkqsCU8JQq4hg3DXdzuUxMueCA8zMsrxYqKxVKuFnE7PSOyOOJwLmNkSJkZCTu-duUy3aMooYic_MA3f8seSFc5MN2ahKaqwOtG1x003bQfCJpqc9BHMDilGnbKUNkY4EhBQUtmsIKMk-hmM983y1r7JGhTydnqNx241EcX0ol6Sqb3uysMFqA",
               "width" : 4160
            }
         ],
         "place_id" : "ChIJrzSJe9NL5IgRHXuQblacksg",
         "plus_code" : {
            "compound_code" : "7HW6+FW Arlington, Jacksonville, FL",
            "global_code" : "862W7HW6+FW"
         },
         "rating" : 4.7,
         "reference" : "ChIJrzSJe9NL5IgRHXuQblacksg",
         "types" : [ "park", "tourist_attraction", "point_of_interest", "establishment" ],
         "user_ratings_total" : 421
      },
      {
         "formatted_address" : "Jacksonville, FL 32226, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.4735932,
               "lng" : -81.4873133
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.47494302989272,
                  "lng" : -81.48596347010728
               },
               "southwest" : {
                  "lat" : 30.47224337010728,
                  "lng" : -81.48866312989273
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "a380fbf702fc5c0661d680324362de11712bccf8",
         "name" : "Pumpkin Hill Creek Preserve State Park",
         "photos" : [
            {
               "height" : 1960,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/100060588522936817197\"\u003eJeremy Bailey\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAex6cdwmQmZAxDHfkejIHafxK5Zo13Ooa9E3tGu7QyydsDMZE238oBuJkai5DjjscrHsO8aWWgRa5FTlcqcGHzinmK96tjoB2xy6tCxYXgg9IFJu1FKJ0EBs9RX9TvwL3EhCDuL8z-KvuJBB_X4ONBhlXGhTZTlQ7FnXeGDSnXRhMvfkpe1R2aA",
               "width" : 4032
            }
         ],
         "place_id" : "ChIJm-cQWi2t5YgRHapgVP6fR_Q",
         "plus_code" : {
            "compound_code" : "FGF7+C3 Northside, Jacksonville, FL",
            "global_code" : "862WFGF7+C3"
         },
         "rating" : 4.2,
         "reference" : "ChIJm-cQWi2t5YgRHapgVP6fR_Q",
         "types" : [
            "tourist_attraction",
            "premise",
            "park",
            "point_of_interest",
            "establishment"
         ],
         "user_ratings_total" : 49
      },
      {
         "formatted_address" : "2145 Arnold Rd, Jacksonville, FL 32218, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.5215514,
               "lng" : -81.6690313
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.52261532989272,
                  "lng" : -81.66772717010728
               },
               "southwest" : {
                  "lat" : 30.51991567010727,
                  "lng" : -81.67042682989273
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "60150a5233f934d72c8cc7513a8b781562cb1a97",
         "name" : "Seaton Creek Preserve",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 3264,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/109449440073110422692\"\u003eRichard Wood\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAA-giEJXEA_cC4C4rf-DoYZQ_zWnhiAiTFbd27okmY7FZ_jIYO4SCj3BWj42TUQQ3h_BQiBC2M1Ueq9NmW6o0z2lAHuY3_rOEPMJTMAGOOvA1XawAuSVjtAiRuaDs5CTu7EhBKwMhl20si-d_dRNt-ebNvGhROBzJ_gI67IiRVvbkjMkgkMPH9rw",
               "width" : 2448
            }
         ],
         "place_id" : "ChIJ1250vEav5YgRXdeCGm1ltjo",
         "plus_code" : {
            "compound_code" : "G8CJ+J9 Northside, Jacksonville, FL",
            "global_code" : "862WG8CJ+J9"
         },
         "rating" : 4.1,
         "reference" : "ChIJ1250vEav5YgRXdeCGm1ltjo",
         "types" : [ "park", "tourist_attraction", "point_of_interest", "establishment" ],
         "user_ratings_total" : 21
      },
      {
         "formatted_address" : "7000 Roosevelt Blvd, Jacksonville, FL 32244, United States",
         "geometry" : {
            "location" : {
               "lat" : 30.239419,
               "lng" : -81.7023825
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 30.24027232989273,
                  "lng" : -81.69800249999999
               },
               "southwest" : {
                  "lat" : 30.23757267010728,
                  "lng" : -81.70384249999999
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/generic_recreational-71.png",
         "id" : "3c7fca77d17b014d39383c8cfb5b0f9645f57db6",
         "name" : "Tillie K. Fowler Regional Park",
         "opening_hours" : {
            "open_now" : true
         },
         "photos" : [
            {
               "height" : 2868,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/111841101529896626165\"\u003eFlorida Sights, Shores, &amp; Springs! !\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAWvQpMN8ynk5z-9AtPrAHcCAJojOtKtdS1RQaGB-cnbZR4wdNbkstQVmzQwtY0jRfU1tI8eRo18pVCReO_DFO0t-udgEIvtkrz0eAqYQEfDaSRYphQExDNXAU3ks-V4q5EhCeVQfECUtlL0ZKiH_wpV1qGhQA_hkIbTMRxl3qQTyuLdxbERog1g",
               "width" : 4320
            }
         ],
         "place_id" : "ChIJv4qWYc3H5YgR2fLPht9pTEY",
         "plus_code" : {
            "compound_code" : "67QX+Q2 Southwest Jacksonville, Jacksonville, FL",
            "global_code" : "862W67QX+Q2"
         },
         "rating" : 4.5,
         "reference" : "ChIJv4qWYc3H5YgR2fLPht9pTEY",
         "types" : [ "park", "tourist_attraction", "point_of_interest", "establishment" ],
         "user_ratings_total" : 230
      }
   ],
   "status" : "OK"
}';

?>

<?php
echo '<div id="all">';
//GET THE RESULTS----------------------------------------------------------------------------------------------------------------
$json = $text;  // TEMP USE ONLY
ob_start(); //Start output buffer
echo $lat;
$output_lat = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

ob_start(); //Start output buffer
echo $lng;
$output_lng = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

$api_key = "PRIVATE_API_KEY";
if ($rankBy == "Distance"){
    // with only rankby...used for DISTANCE ONLY
    $search_url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=trail&location=" . urlencode($lat) . "," . urlencode($lng) . "&rankBy=distance" . "&key=" . $api_key;
}else{
    // with radius and rankby..used for PROMINENCE ONLY
    $search_url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=trail&location=" . urlencode($lat) . "," . urlencode($lng) . "&radius=" . urlencode($radius) . "&rankBy=prominence" . "&key=" . $api_key;
}


$json = file_get_contents($search_url);
//UNCOMMENT ABOVE LINE TO GET THE RESULTS FROM THE API INSTEAD OF HARD CODED TEXT

//echo $search_url;


$decoded = json_decode($json, true);

//print_r($decoded);
$results = $decoded["results"];
$orderedBy = "Ordered by " . $rankBy . " within " . $radius . " miles";
echo '<span id="results_title">' . count($results) . " Trails Found Near You" . '</span><br><br>';
echo '<span id="order_by_title">'.$orderedBy . '<br><br></span>';


//-------------------------------------------------------------------------------------------------------
//WEATHER
echo '<div class="sticky">';
ob_start(); //Start output buffer
echo $lat;
$output_lat = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

ob_start(); //Start output buffer
echo $lng;
$output_lng = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer

//print_r($lat . " - " . $lng);
$weather_search = "http://api.openweathermap.org/data/2.5/weather?lat=" . $output_lat . "&lon=" . $output_lng . "&appid=09dfdcb387b6a2e5e70f114ef5959856&units=imperial";
$weather_json = file_get_contents($weather_search);
$decoded_weather = json_decode($weather_json, true);

$temp = $decoded_weather["main"]["temp"];
$feels_like = $decoded_weather["main"]["feels_like"];
$temp_min = $decoded_weather["main"]["temp_min"];
$temp_max = $decoded_weather["main"]["temp_max"];
$pressure = $decoded_weather["main"]["pressure"];
$humidity = $decoded_weather["main"]["humidity"];
$cloud_percentage = $decoded_weather["clouds"]["all"];
$desc_of_weather = $decoded_weather["weather"][0]["description"];
$weather_icon = $decoded_weather["weather"][0]["icon"];
$name_of_location = $decoded_weather["name"];

$img_src = "http://openweathermap.org/img/wn/" . $weather_icon . "@2x.png";
echo "<span style='font-size: 20pt;'>Current Weather</span><br>";

echo '<img src="' . $img_src . '">';
echo "<br>";
echo $desc_of_weather . '<br>';
echo "Temperature: " . $temp . "<br>";
echo "Feels like: " . $feels_like . "F<br>";
echo "Min Temperature: " . $temp_min . "F" . "<br>";
echo "Max Temperature: " . $temp_max . "F" . "<br>";

echo "Cloud Coverage " . $cloud_percentage . "%<br>";

echo "<br>";
//HIKING/BIKING FACTS----------------------------------------------------------------------------------------------------
$random_number1 = rand(0, 4);
$random_number2 = rand(5, 10);
$random_number3 = rand(11, 15);

echo "<span style='font-size: 20pt;'>Did You Know?</span><br>";
$facts = file_get_contents("Facts/facts");
$one_fact1 = explode("<!!>", $facts)[$random_number1];  //Get fact from index 0.
$one_fact2 = explode("<!!>", $facts)[$random_number2];  //Get fact from index 0.
$one_fact3 = explode("<!!>", $facts)[$random_number3];  //Get fact from index 0.


echo '<div style="width: 300px">' . $one_fact1 . '</div>';
echo '<div style="width: 300px"><hr></div>';
echo '<div style="width: 300px">' . $one_fact2 . '</div>';
echo '<div style="width: 300px"><hr></div>';
echo '<div style="width: 300px">' . $one_fact3 . '</div>';


echo '</div>';
//------------------------------------------------------------------------------------------------------------------------------------


//the table-------------------------------------------------------------------------------------------------------------
$address_array = array();
echo '<table cellspacing="0" align="center" style="width:70%;height: 100%" cellpadding="0">';
for ($i = 0; $i < count($results); $i++) {

    $trail = $results[$i];
    $name = $trail["name"];
    $formatted_address = $trail["formatted_address"];
    array_push($address_array,$formatted_address);
    $rating = $trail["rating"];
    $is_open = $trail["opening_hours"]["open_now"];

    $photo_id = $trail["photos"][0]["photo_reference"];
//
    $photo_url = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&photoreference=" . $photo_id . "&key=" . $api_key;

    //$photo_url = "blank"; // uncomment the above to make it work with real data

    $address_url =  "https://www.google.com/search?q=" . $formatted_address . "&oq=1234+Losco&aqs=chrome.1.69i57j35i39j69i60l2j69i61.2916j0j7&sourceid=chrome&ie=UTF-8";



//one row
    echo '<tr>';
    echo '<td><b><u><span style="font-size:15pt">' . $name . '</u></span></b></td>';
    if ($is_open == 1) {
        echo '<td><span style="font-size:15pt; color:green">' . "Open Now" . '</span></td>';
    } else {
        echo '<td><span style="font-size:15pt;color:red">' . "Closed" . '</span></td>';
    }

    ?>
    <td rowspan="2"><img src="<?php echo $photo_url ?>" height="150"/></td>
    <?php
    echo '</tr>';


//another row
    echo '<tr>';
    echo '<td><span style="font-size:15pt">' . $formatted_address . "<br>" . $rating . '<span style="font-size: 20pt; color: red">' . '&#9734' . '</span>' . "<br>" . "View More >>" . "<br>" . "<a href='$address_url' target='_blank' style='text-decoration: none'> Show on Map >>" . '</span></td>';
    echo '<td></td>';
    echo '<td></td>';

    echo '</tr>';


}
echo '</table>';
echo '</div>';
//end of table -----------------------------------------------------------------------------------------------------------
?>
<!--FOR THE MAP----------------------------------------------------------------------------------------------------------->
<!--<script>-->
<!---->
<!---->
<!--    document.getElementById("myButton").onclick = function () {-->
<!--        initMap();-->
<!--    };-->
<!---->
<!---->
<!--    var map;-->
<!---->
<!--    function initMap() {-->
<!--        var myLatLng = {lat: parseFloat(localStorage.getItem("lat")), lng: parseFloat(localStorage.getItem("lng"))};-->
<!--        alert(parseFloat(localStorage.getItem("lat")));-->
<!---->
<!--        map = new google.maps.Map(document.getElementById('map'), {-->
<!--            zoom: 12,-->
<!--            center: myLatLng-->
<!--        });-->
<!---->
<!--        var marker = new google.maps.Marker({-->
<!--            position: myLatLng,-->
<!--            map: map,-->
<!--            title: 'Hello World!'-->
<!--        });-->
<!---->
<!--        setMarkers();-->
<!--    }-->
<!---->
<!--    function setMarkers() {-->
<!--        var marker = new google.maps.Marker({-->
<!--            position: {lat: 30.332184, lng: 81.655647},-->
<!--            map: map,-->
<!--            title: 'bbb'-->
<!--        });-->
<!---->
<!--        marker.setMap(map);-->
<!--    }-->
<!---->
<!--</script>-->

