<?php

namespace App\Controller;

class IndexController extends BaseController
{
    public function index()
    {
          return $this->view('cv', [
              'pageTitle' => 'João R C Almeida',
              'myName' => 'João',
              'aboutMe' => $this->getAboutMe(),
              'formacao' => $this->getEducation(),
              'experiencias' => $this->getExperiences(),
              'cursosLivres' => $this->getCursosLivres(),
              'contact' => $this->getContact(),
              'skills' => $this->getSkills(),
              'hobbies' => $this->getHobbies(),
              'languages' => $this->getLanguages(),
            ]);
    }

    private function getAboutMe()
    {
        return 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, non, dolorem, cumque
          distinctio magni quam expedita velit laborum sunt amet facere tempora ut fuga aliquam ad asperiores
          voluptatem dolorum!';
    }

    private function getHobbies()
    {
      return [
        'Programação',
        'Games',
        'Filmes',
        'Seriados',
        'Gatos',
      ];
    }

    private function getLanguages()
    {
      return [
        ['language' => 'Português', 'percent' => '100'],
        ['language' => 'Inglês', 'percent' => '60'],
      ];
    }

    private function getSkills()
    {
      $data = [
          ['percent' => 1, 'description' => 'PHP'],
          ['percent' => 0.9, 'description' => 'PostgreSQL'],
          ['percent' => 0.8, 'description' => 'MySQL'],
          ['percent' => 0.6, 'description' => 'Git'],
          ['percent' => 0.6, 'description' => 'CVS'],
          ['percent' => 0.5, 'description' => 'Scrum'],
          ['percent' => 0.4, 'description' => 'Vagrant'],
          ['percent' => 0.4, 'description' => 'Docker'],
          ['percent' => 0.2, 'description' => 'Laravel'],
          ['percent' => 0.2, 'description' => 'ZF 2'],
          ['percent' => 0.2, 'description' => 'ZF 3'],
      ];

      foreach ($data as $key => $row) {
          $percent[$key]  = $row['percent'];
          $description[$key]  = $row['description'];
      }

      array_multisort($percent, SORT_DESC, $description, SORT_ASC, $data);

      return $data;
    }

    private function getEducation()
    {
        return [
        [
          'ano' => 2001,
          'titulo' => 'Técnino em Processamento de dados',
          'nivel' => 'Ensino Médio',
          'instituicao' => 'Colégio da Cidade'
        ],
        [
          'ano' => 2006,
          'titulo' => 'Tecnologia da Informação',
          'nivel' => 'Gradução',
          'instituicao' => 'UniverCidade'
        ],
        [
          'ano' => 2014,
          'titulo' => 'Engenharia de Software',
          'nivel' => 'Pós-Gradução',
          'instituicao' => 'Instituto Infnet'
        ],
        [
          'ano' => 2014,
          'titulo' => 'Zend Certified PHP Engineer',
          'nivel' => 'ZEND022595',
          'instituicao' => 'Zend Technologies'
        ]
        ];
    }

    private function getExperiences()
    {
          return [
            [
              'where' => 'UNISUAM',
              'year' => '2012 - Hoje',
              'profession' => 'Analista',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
              'where' => 'UNISUAM',
              'year' => '2007 - 2012',
              'profession' => 'Programador',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
              'where' => 'TDesign',
              'year' => '2006 - 2007',
              'profession' => 'Programador Web',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
              'where' => 'Comunidade Mãe do Redentor',
              'year' => '2001 - 2006',
              'profession' => 'Programador Web',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
              'where' => 'Colégio Imaculada Conceição',
              'year' => '2003',
              'profession' => 'Técnico em Informática',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
              'where' => 'UniverCidade',
              'year' => '2001',
              'profession' => 'Estagiário de HelpDesk',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ],
            [
              'where' => 'UNISUAM',
              'year' => '2007 - 2012',
              'profession' => 'Programador',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                  non, dolorem, cumque distinctio magni quam expedita velit laborum sunt amet facere tempora
                  ut fuga aliquam ad asperiores voluptatem dolorum!'
            ]
          ];
    }

    private function getContact()
    {
      return [
        [
          'icon' => 'phone',
          'title' => '+55 21 98850 3101'
        ],
        [
          'icon' => 'envelope',
          'title' => 'joaorca@gmail.com'
        ],[
          'icon' => 'skype',
          'title' => 'Skype',
          'description' => 'joaorca@hotmail.com'
        ],[
          'icon' => 'github',
          'title' => 'GitHub',
          'description' => 'github.com/joaorca'
        ],[
          'icon' => 'linkedin',
          'title' => 'LinkedIn',
          'description' => 'linkedin.com/in/joaorca'
        ],[
          'icon' => 'facebook',
          'title' => 'Facebook',
          'description' => 'facebook.com/joaorca'
        ],[
          'icon' => 'twitter',
          'title' => 'Twitter',
          'description' => 'twitter.com/joao_rca'
        ],

      ];
    }

    private function getCursosLivres()
    {
          return [
            [
              'info1' => 'Linha 1 - titulo',
              'info2' => 'Linha 2 - descricao'
            ],
            [
              'info1' => 'Linha 1 - titulo',
              'info2' => 'Linha 2 - descricao'
            ]
          ];
    }

}
