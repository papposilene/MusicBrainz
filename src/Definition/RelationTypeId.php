<?php

namespace MusicBrainz\Definition;

class RelationTypeId
{
    public static function getClassMap()
    {
        return [
            'de7cc874-8b1b-3a05-8272-f3834c968fb7' => 'MusicBrainz\Relation\Type\Area\Area\HasPart',
            '542f8484-8bc7-3ce5-a022-747850b2b928' => 'MusicBrainz\Relation\Type\Area\Event\HeldIn',
            '0b67183b-9f36-4b09-b561-0fa531508f91' => 'MusicBrainz\Relation\Type\Area\Instrument\IsInstrumentOriginOf',
            '4f4aa317-c3c4-4001-ac23-fb8cf0bc543c' => 'MusicBrainz\Relation\Type\Area\Recording\IsArrangingAreaFor',
            'aede7c5e-8bd3-4f07-bad2-c3d159e8c1c5' => 'MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor',
            'e24482da-f568-46ba-a428-9fa56615c7b2' => 'MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor\IsEditingAreaFor',
            'eef56d04-852a-4ce6-bfc9-678c19392a16' => 'MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor\IsMixingAreaFor',
            '37ef3a0c-cac3-4172-b09b-4ca98d2857fc' => 'MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor\IsRecordingAreaFor',
            '582f6452-ff89-4f3b-9e78-eff5b842e208' => 'MusicBrainz\Relation\Type\Area\Recording\IsEngineeringAreaFor\IsRemixingAreaFor',
            '93078fc7-6585-40a7-ab7f-6acb9da65b84' => 'MusicBrainz\Relation\Type\Area\Recording\IsProducingAreaFor',
            'd59c5121-7d6c-4965-9fa8-ab47b7d59012' => 'MusicBrainz\Relation\Type\Area\Release\IsArrangingAreaFor',
            '3a24272b-3273-456a-9be8-421580513d4b' => 'MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor',
            'e42af9dd-4203-480c-9178-ee4f67ba2609' => 'MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor\IsEditingAreaFor',
            'ee380877-3636-462b-b407-ab39370a787e' => 'MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor\IsMasteringAreaFor',
            '653b7420-c418-4bdc-83a5-6b2f44a65915' => 'MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor\IsMixingAreaFor',
            '354043e1-bdc2-4c7f-b338-2bf9c1d56e88' => 'MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor\IsRecordingAreaFor',
            '5147db55-6240-4479-bfa9-0589455f1c50' => 'MusicBrainz\Relation\Type\Area\Release\IsEngineeringAreaFor\IsRemixingAreaFor',
            'c0998b44-aa21-4d27-be79-2ff64205cecd' => 'MusicBrainz\Relation\Type\Area\Release\IsManufacturingAreaFor',
            '0123b87a-5b31-4cd7-9df7-03f885bfd90c' => 'MusicBrainz\Relation\Type\Area\Release\IsPrintingAreaFor',
            '8d60be20-959c-4f5b-85f6-2b1f44321d11' => 'MusicBrainz\Relation\Type\Area\Release\IsProducingAreaFor',
            'b879051b-10e6-43b4-a49a-efdecc695f02' => 'MusicBrainz\Relation\Type\Area\Url\HasLinkInOtherDatabaseTo',
            'c52f14c0-e9ac-4a8a-8f7a-c47328de168f' => 'MusicBrainz\Relation\Type\Area\Url\HasLinkInOtherDatabaseTo\HasGeonamesPage',
            '85c5256f-aef1-484f-979a-42007218a1c2' => 'MusicBrainz\Relation\Type\Area\Url\HasLinkInOtherDatabaseTo\HasWikidataPage',
            '9228621d-9720-35c3-ad3f-327d789464ec' => 'MusicBrainz\Relation\Type\Area\Url\HasLinkInOtherDatabaseTo\HasWikipediaPage',
            '536b4ee4-bb2d-3b6f-a3f1-082f22e5b17d' => 'MusicBrainz\Relation\Type\Area\Work\HasAnthem',
            'c6bd908f-41f1-4ff3-83f3-df514278d994' => 'MusicBrainz\Relation\Type\Area\Work\HostedPremiereFor',
            '04307051-fe20-4357-89e6-ee7a6470c229' => 'MusicBrainz\Relation\Type\Area\Work\IsDedicatedBy',
            'e02f372b-33c3-41fc-88ba-6b3e95f50d77' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor',
            '468ec917-4be7-4a9a-8dbd-e740d049c5a2' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor\IsArrangingAreaFor',
            '5293c7f7-7950-4fef-b367-b0062b99c4e7' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor\IsComposingAreaFor',
            '69230b8a-aa15-46e5-b540-b6302d60eb22' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor\IsLibrettoWritingArea',
            '43ba113b-968f-4fa9-93b2-73e60f954c90' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor\IsLyricsWritingArea',
            '4dd0d181-8df0-47d4-9f5f-0b63d05b64cb' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor\IsRevisingAreaFor',
            '79a01829-749c-44c3-8b9e-65243b302f81' => 'MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor\IsTranslatingAreaFor'
        ];
    }
}