<?php

namespace Database\Seeders\Meta;

use App\Models\Meta\MetaKind\MetaKind;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetaKindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetaKind::truncate();

        $metaKinds = [
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'object',
                'caption' => 'Мета-сущность',
                'desc' => 'Описание сущности',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'select',
                'caption' => 'Мета-выборка',
                'desc' => 'Описание выборки',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'relf',
                'caption' => 'Мета-реляционный фильтр',
                'desc' => 'Описание реляционного фильтра',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'column',
                'caption' => 'Мета-атрибут',
                'desc' => 'Описание атрибута сущности',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'col_group',
                'caption' => 'Мета группа аттрибутов',
                'desc' => 'Описание группы аттрибутов',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'join',
                'caption' => 'Мета-связь',
                'desc' => 'Описание связи',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'object',
                'name' => 'action',
                'caption' => 'Мета-действие',
                'desc' => 'Описание действия в пользовательском интерфейсе',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'timeslice',
                'caption' => 'Отметка временных срезов',
                'desc' => 'Отметка временных срезов',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'activity',
                'caption' => 'Отметка пользовательской активности',
                'desc' => 'Отметка пользовательской активности',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'comment',
                'caption' => 'Отметка комментируемости',
                'desc' => 'Отметка комментируемости',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'list',
                'caption' => 'Организация списков в дерево',
                'desc' => 'Организация списков в дерево',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'log',
                'caption' => 'Организация групп логов в дерево',
                'desc' => 'Организация групп логов в дерево',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'catalog',
                'caption' => 'Организация каталогов для файлов в дерево',
                'desc' => 'Организация каталогов для файлов в дерево',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'file',
                'caption' => 'Организация файлов, присоединено к дереву каталогов',
                'desc' => 'Организация файлов, присоединено к дереву каталогов',
            ],
            [
                'meta_kind_id' => Str::Uuid()->toString(),
                'link' => 'registry',
                'name' => 'rights',
                'caption' => 'Организация описания древовидной иерархии объектов права',
                'desc' => 'Организация описания древовидной иерархии объектов права',
            ],

        ];

        MetaKind::insert($metaKinds);
    }
}
