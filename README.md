## Api Documentation

#### Messages

-   \_Method post :http://127.0.0.1:8000/api/v1/messages/store

-   _Request_

    ```
        json :
        {
            "name" : "Samuel",
            "message" : "Wisata Papua"
        }
    ```

#### Adventures

-   _Tour Adventures_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-adventures/
-   _result_

    ```
        {"status":true,"message":"Success","data":[{"id":1,"title":"Lorem Ipsum","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"","status":"Publish","user_id":1,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_adventure":"lorem-lpsum-1","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_user":null}}]}
    ```

-   _Tour Adventure Detail_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-adventures/{slug}/detail
-   _result_

    ```
        {"status":true,"message":"Success","data":[{"id":1,"title":"Lorem Ipsum","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"","status":"Publish","user_id":1,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_adventure":"lorem-lpsum-1","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_user":null}}]}
    ```

#### Settings

-   _Settings_
-   _Method get_ http://127.0.0.1:8000/api/v1/settings

-   _result_

    ```
    {"status":true,"message":"Success","data":{"id":1,"site_title":"Dashboard GOTRAVPAPUA.COM","site_address":"https:\/\/admin@gotravpapua.com\/","copyright":"2023, GOTRAVPAPUA.com - All Rights Reserved | <a href='https:\/\/gotravpapua.com\/' target='_blank'>www.gotravpapua.com<\/a>","slug":null,"meta_tags":"<meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <meta name=\"description\" content=\"Explore the beauty of Papua, Indonesia with our exciting tour packages, adventurous activities, and stunning destinations. Join us for unforgettable events and experiences.\">\r\n    <meta name=\"keywords\" content=\"Papua travel, Indonesia tours, adventure trips, Papua destinations, travel events\">\r\n    <meta name=\"author\" content=\"GOTRAVPAPUA.COM\">","logo":"logo-panel.png","logo_loader":"logo-loader.png","logo_meta":"https:\/\/gotravpapua.com\/assets\/images\/pre-load-gotrav.png","logo_favicon":"favicon.png","office_address":"Jl.Eunike Mawene Kimi, Nabire Tengah, Papua Tengah.","email_address":"hello@admin@gotravpapua.com","telephone":"085243800061","google_map_embed":"<iframe src=\"https:\/\/www.google.com\/maps\/embed?pb=!1m18!1m12!1m3!1d8133512.942749398!2d135.6083135923328!3d-5.501216729418526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x684a0316a5130283%3A0xf0d0324058e7ea8!2sNew%20Guinea!5e0!3m2!1sen!2sid!4v1693062291541!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"><\/iframe>","instagram":"https:\/\/instagram.com\/","facebook":"https:\/\/facebook.com\/","twitter":"https:\/\/twitter.com\/","tiktok":"https:\/\/tiktok.com\/","linkedin":"https:\/\/linkedin.com\/","youtube":"https:\/\/www.youtube.com\/","logo_dashboard_lg_dark":"logo_lg_dark.png","logo_dashboard_sm_dark":"logo_sm_dark.png","logo_dashboard_lg_light":"logo_lg_light.png","logo_dashboard_sm_light":"logo_sm_light.png","created_at":"2023-09-01T05:34:21.000000Z","updated_at":"2023-09-01T05:34:21.000000Z"}}
    ```

#### Sliders

-   _Sliders_
-   _Method get_ http://127.0.0.1:8000/api/v1/sliders

-   _result_

    ```
        {"status":true,"message":"Success","data":{"id":2,"title":"Lorem Ipsum","sub_title":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","link_satu_label":"Lorem ipsum dolor sit amet consectetur adipisicing elit.","link_satu_url":"Lorem ipsum dolor sit amet consectetur adipisicing elit.","link_dua_label":"Lorem ipsum dolor sit amet consectetur adipisicing elit","link_dua_url":"Lorem ipsum dolor sit amet consectetur adipisicing elit","created_at":"2023-09-01T08:42:38.000000Z","updated_at":"2023-09-01T08:42:38.000000Z","slug_slider":"lorem-lpsum-2"}}
    ```

-   _Sliders Detail_
-   _Method get_ http://127.0.0.1:8000/api/v1/sliders/{slug}/detail

-   _result_

    ```
       {"status":true,"message":"Success","data":{"id":2,"title":"Lorem Ipsum","sub_title":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","link_satu_label":"Lorem ipsum dolor sit amet consectetur adipisicing elit.","link_satu_url":"Lorem ipsum dolor sit amet consectetur adipisicing elit.","link_dua_label":"Lorem ipsum dolor sit amet consectetur adipisicing elit","link_dua_url":"Lorem ipsum dolor sit amet consectetur adipisicing elit","created_at":"2023-09-01T08:42:38.000000Z","updated_at":"2023-09-01T08:42:38.000000Z","slug_slider":"lorem-lpsum-2"}}
    ```

    #### Tour Events

-   _Tour Events_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-events

-   _result_

    ```
    {"status":true,"message":"Success","data":{"id":3,"title":"Baliem Valley Festival, 2024","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"03.png","status":"Draft","user_id":1,"locations_id":null,"deleted_at":null,"created_at":"2023-09-04T10:42:10.000000Z","updated_at":"2023-09-04T10:42:10.000000Z","slug_tour_event":"lorem-lpsum-3","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-04T10:42:10.000000Z","updated_at":"2023-09-04T10:42:10.000000Z","slug_user":null}}}
    ```

-   _Tour Events Detail_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-events/{slug}/detail

-   _result_

    ```
      {"status":true,"message":"Success","data":{"id":3,"title":"Baliem Valley Festival, 2024","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"03.png","status":"Draft","user_id":1,"locations_id":null,"deleted_at":null,"created_at":"2023-09-04T10:42:10.000000Z","updated_at":"2023-09-04T10:42:10.000000Z","slug_tour_event":"lorem-lpsum-3","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-04T10:42:10.000000Z","updated_at":"2023-09-04T10:42:10.000000Z","slug_user":null}}}
    ```

    #### Tour Packages

-   _Tour Packages_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-packages

-   _result_

    ```
    {"status":true,"message":"Success","data":{"id":2,"title":"Papuan Paradise Expedition","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"01.png","status":"Publish","user_id":1,"deleted_at":null,"created_at":"2023-09-04T12:28:46.000000Z","updated_at":"2023-09-04T12:28:46.000000Z","slug_tour_package":"lorem-2","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-04T12:28:46.000000Z","updated_at":"2023-09-04T12:28:46.000000Z","slug_user":null}}}
    ```

-   _Tour Packages Detail_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-packages/lorem-2/detail

-   _result_

    ```
       {"status":true,"message":"Success","data":{"id":2,"title":"Papuan Paradise Expedition","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"01.png","status":"Publish","user_id":1,"deleted_at":null,"created_at":"2023-09-04T12:28:46.000000Z","updated_at":"2023-09-04T12:28:46.000000Z","slug_tour_package":"lorem-2","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-04T12:28:46.000000Z","updated_at":"2023-09-04T12:28:46.000000Z","slug_user":null}}}
    ```

    #### Tour Destinations

-   _Tour Destinations_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-destinations
-   _result_

    ```
    {"status":true,"message":"Success","data":{"id":1,"title":"Scuba Diving and Snorkeling","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"01.png","status":"Publish","user_id":1,"created_at":"2023-09-04T12:49:15.000000Z","updated_at":"2023-09-04T12:49:15.000000Z","slug_tour_destination":"lorem-lpsum-1","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-04T12:49:10.000000Z","updated_at":"2023-09-04T12:49:10.000000Z","slug_user":null}}}
    ```

-   _Tour Destinations Detail_
-   _Method get_ http://127.0.0.1:8000/api/v1/tour-destinations/lorem-2/detail

-   _result_

    ```
       {"status":true,"message":"Success","data":{"id":1,"title":"Scuba Diving and Snorkeling","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"01.png","status":"Publish","user_id":1,"created_at":"2023-09-04T12:49:15.000000Z","updated_at":"2023-09-04T12:49:15.000000Z","slug_tour_destination":"lorem-lpsum-1","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-04T12:49:10.000000Z","updated_at":"2023-09-04T12:49:10.000000Z","slug_user":null}}}
    ```

## Dev URLs

## Artisan Commands

Buat model dengan controller, resources, factory, seeder, migration

```
    php artisan make:model NamaModel -crfsm
```

## TODOS

    ⌛ create dependent dropdown
    https://www.positronx.io/laravel-dependent-country-state-city-dropdown-with-ajax/
