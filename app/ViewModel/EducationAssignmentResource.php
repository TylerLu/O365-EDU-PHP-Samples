<?php
/**
 *  Copyright (c) Microsoft Corporation. All rights reserved. Licensed under the MIT license.
 *  See LICENSE in the project root for license information.
 */

namespace App\ViewModel;


class EducationAssignmentResource extends ParsableObject
{
    public $id;
    public $distributeForStudentWork;
    public $resources; //For submission resources
    public $resource;//For assignment resources
    public $resourcesFolderUrl;

    public function __construct()
    {
        $this->addPropertyMappings(
            [
                "id" => "id",
                "distributeForStudentWork" => "distributeForStudentWork",
                "resources" => "resources",
                "resource" => "resource",
                "resourcesFolderUrl"=>"resourcesFolderUrl"
            ]);

    }
}