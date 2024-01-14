<?php

declare(strict_types=1);

namespace OliverThiele\OtAccessiblecontent\ViewHelpers;

/**
 * Copyright notice
 * (c) 2023 Oliver Thiele <mail@oliver-thiele.de>, Web Development Oliver Thiele
 * All rights reserved
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * This copyright notice MUST APPEAR in all copies of the script!
 */

use Closure;
use InvalidArgumentException;
use TYPO3Fluid\Fluid\Core\ViewHelper\Exception;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use UnexpectedValueException;

/**
 * Class SubordinateHeadingViewHelper
 * @package OliverThiele\OtBootstrap5\ViewHelpers
 */
class SubordinateHeadingViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize ViewHelper arguments
     *
     * @throws Exception
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('additionalLevels', 'int', 'Additional header levels', false, 1);
    }

    /**
     * Render
     *
     * @param array $arguments
     * @param Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return string
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     */
    public static function renderStatic(
        array $arguments,
        Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): string {
        $variableProviderProperties = $renderingContext->getVariableProvider()->getAll();

        $headerLayout = (int)$variableProviderProperties['data']['header_layout'];

        if ($headerLayout === 0) {
            $headerLayout = $variableProviderProperties['settings']['defaultHeaderType'];
        }
        if ($headerLayout === 100) {
            return 'p';
        }

        $newLevel = $headerLayout;

        if (isset($arguments['additionalLevels'])) {
            $additionalLevels = $arguments['additionalLevels'];
            $newLevel = $headerLayout + $additionalLevels;
        }

        return 'h' . $newLevel;
    }

}
