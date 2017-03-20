<?php

class ContentType extends Papi_Page_Type {

    /**
     * Meta data
     *
     * @return array
     */
    public function meta() {
        return [
            'name'        => 'Screen type',
            'post_type'   => ['screen'],
        ];
    }

    /**
     * Define our properties.
     */
    public function register() {

        $this->box([
            'title'   => 'Couleur de l’écran',
            'context' => 'side',
            'layout'  => 'vertical',
        ], [
            papi_property( [
                'title'    => '',
                'slug'     => 'screen_color',
                'type'     => 'radio',
                'settings' => [
                    'selected' => 'blue',
                    'items' => [
                        'Bleu'   => 'blue',
                        'Orange' => 'orange',
                        'Vert'   => 'green',
                    ]
                ]
            ] )
        ]);

        $this->box([
                'title' => 'Liens',
                'layout' => 'vertical',
            ], [
            papi_property([
                'title'    => 'Liste des liens',
                'slug'     => 'content_dots',
                'type'     => 'repeater',
                'settings' => [
                    'layout' => 'row',
                    'add_new_label' => 'Ajouter un nouveau lien',
                    'items' => [
                        papi_property([
                            'type'     => 'link',
                            'title'    => 'Lien',
                            'slug'     => 'link',
                        ]),
                        papi_property([
                            'type'     => 'string',
                            'title'    => 'Description',
                            'slug'     => 'description',
                        ]),
                        papi_property( [
                            'type'     => 'bool',
                            'title'    => 'Lien vidéo ?',
                            'slug'     => 'is_video',
                        ]),
                    ]
                ]
            ] ),
        ]);

        $this->box([
                'title' => 'Encadré centré',
                'layout' => 'vertical',
            ], [
            papi_property([
                'type'     => 'string',
                'title'    => 'Titre',
                'slug'     => 'content_box_title',
            ]),
            papi_property([
                'type'     => 'text',
                'title'    => 'Contenu',
                'slug'     => 'content_box_text',
            ]),
        ]);

        $this->box([
                'title' => 'Image bas',
                'context' => 'side',
                'layout' => 'vertical',
            ], [
            papi_property([
                'type'     => 'image',
                'title'    => '',
                'slug'     => 'content_bottom_img',
            ]),
        ]);

    }
}
