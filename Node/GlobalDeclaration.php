<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;

class GlobalDeclaration extends StatementNode {

    /** @var Token */
    public $globalKeyword;

    /** @var DelimitedList[] */
    public $variableNameList;

    /** @var Token */
    public $semicolon;

    public function __construct() {
        parent::__construct(NodeKind::GlobalDeclaration);
    }
}