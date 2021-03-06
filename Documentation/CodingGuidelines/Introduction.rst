.. include:: ../Includes.txt

.. _cgl-introduction:

Introduction
------------

This chapter defines coding guidelines for the TYPO3 CMS project.
Following these guidelines is mandatory for TYPO3 core developers and
contributors to the TYPO3 core.

Extension authors are strongly encouraged to follow these guidelines
when developing extensions for TYPO3. Following these guidelines makes
it easier to read the code, analyze it for learning or performing code
reviews. These guidelines also help preventing typical errors in the
TYPO3 code.

This chapter defines how TYPO3 code, files and directories should be
outlined and formatted. It gives some thoughts on general coding
flavors the core tries to follow.

Following PSR standards
^^^^^^^^^^^^^^^^^^^^^^^

TYPO3 codebase follows  `PSR-1 <http://www.php-fig.org/psr/psr-1/>`__ and `PSR-2 <http://www.php-fig.org/psr/psr-2/>`__ standards for code formatting.


.. _cgl-quality-assurance:

The CGL as a means of quality assurance
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Our programmers know the CGL and are encouraged to inform authors,
should their code not comply with the guidelines.

Apart from that, adhering to the CGL is not voluntary: The CGL are also
enforced by structural means: Automated tests are run by the continuous
integration tool bamboo to make sure that every (core) code change complies
with the CGL. In case a change does not meet the criteria, bamboo will
give a negative vote in the review system and point to the according
problem.

Following the coding guidelines not necessarily means more work for
core contributors: The automatic CGL check performed by bamboo can
be easily replayed locally: If the test setup votes negative on a
core patch in the review system due to CGL violations, the patch
can be easily fixed locally by calling :file:`./Build/Scripts/cglFixMyCommit.sh`
and pushed another time. For details on core contributions, have a look at the
:ref:`contribution workflow guide <t3contribute:TYPO3.Tutorial.ContributionWorkflow.Index>`.
