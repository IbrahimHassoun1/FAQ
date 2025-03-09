<?php
//make tables in case they don't exist
require_once(__DIR__ . "/../migrations/userMigrations.php");
require_once(__DIR__ . "/../migrations/questionMigrations.php");
//plant user seeds
require_once(__DIR__ . "/../../models/User.php");
$user = new User();
$user->setFullName("bob");
$user->setEmail("ihassoun73@gmail.com");
$user->setPassword("12345678");
$response = $user->register();

require(__DIR__ . "/../../models/Question.php");
$question = new Question();
$question->setQuestion("What is a Reference Architecture?");
$question->setAnswer("A Reference Architecture is a predefined architectural pattern or set of patterns designed for use in specific business and technical contexts, often including supporting artifacts harvested from previous projects. It captures accumulated knowledge to guide future developments and provides a shared baseline for teams involved in ongoing projects.");
$question->create();

$question = new Question();
$question->setQuestion("Why is the concept of Reference Architecture important?");
$question->setAnswer("It provides guidance for future developments by offering a common vision, strategy, and framework. It incorporates knowledge from various domains (market segmentation, systems, functionality, design patterns) and serves as a reference for multiple teams, ensuring consistency and alignment across projects.");
$question->create();


$question = new Question();
$question->setQuestion("What is the value of maintaining a Reference Architecture?");
$question->setAnswer("A Reference Architecture consolidates the accumulated knowledge of many years of work. It helps teams understand 'why,' 'what,' and 'how' aspects of a system, ensuring that they have a shared baseline of architectural principles to guide future system development.");
$question->create();

$question = new Question();
$question->setQuestion("What are the key elements of a Reference Architecture?");
$question->setAnswer("The key elements include:

Why: Market segmentation, value chain, customer drivers, application context.
What: Systems, performance parameters, system interfaces, functionality, variability.
How: Design views, essential patterns, and main concepts.");
$response = $question->create();
echo $response['message'];
$question = new Question();
$question->setQuestion("What is the definition of `Architecture` in the context of systems engineering?");
$question->setAnswer("In systems engineering, architecture refers to the fundamental organization of a system, which includes its components, their relationships to each other, and to the environment, as well as the principles guiding its design and evolution.");
$question->create();

$question = new Question();
$question->setQuestion("What is the difference between explicit and implicit knowledge in system architecture?");
$question->setAnswer("Explicit Knowledge is information that has been shared and documented for the use of others.
Implicit Knowledge refers to information known by an individual or a group, but not documented or shared for the use of others.");
$question->create();

$question = new Question();
$question->setQuestion("What is the general definition of a Reference Architecture?");
$question->setAnswer("A Reference Architecture provides a proven template solution for describing system architectures within a specific domain. It helps standardize and streamline the process of implementing systems, offering common vocabulary, functions, and interfaces to ensure consistency and facilitate communication.");
$question->create();

$question = new Question();
$question->setQuestion("How do different companies define Reference Architecture?");
$question->setAnswer("Companies like Sun, Burton Group, and BEA Systems define Reference Architecture differently. Sun focuses on technology and implementation, Burton Group links Reference Architecture to business goals, and BEA Systems provides detailed requirements and architectural designs. These examples show the varied applications of the term in different industries.");
$question->create();

$question = new Question();
$question->setQuestion("What are some examples of Reference Architectures in various domains?");
$question->setAnswer("One example is the Space Data Systems Reference Architecture (RASDS) for NASA, which provides a standardized approach for describing data system architectures in the space domain. Another example is the IT Security Architecture for the State of Arizona, which provides guidelines for developing statewide technology roadmaps to meet security and regulatory requirements.");
$question->create();

$question = new Question();
$question->setQuestion("Why is increasing complexity a driving force for creating a Reference Architecture?");
$question->setAnswer("As systems become more complex, with broader scopes and integration needs, Reference Architectures help manage these complexities by providing a structured approach, modularization, and a common vision to guide development efforts across multiple teams and locations.");
$question->create();

$question = new Question();
$question->setQuestion("How does a Reference Architecture improve the creation of products and product lines?");
$question->setAnswer("Reference Architectures streamline product creation by managing synergy, offering architectural principles, best practices, and patterns, and providing a baseline architecture that helps avoid reinventing solutions for previously solved problems.");
$question->create();

$question = new Question();
$question->setQuestion("How do Reference Architectures enhance interoperability between systems?");
$question->setAnswer("By articulating domain concepts, modeling functions and qualities above the system level, and making explicit decisions about compatibility and upgrades, Reference Architectures ensure that systems can work together effectively, improving performance and reducing integration costs.");
$question->create();

$question = new Question();
$question->setQuestion("How does a Reference Architecture relate to a company's mission, vision, and strategy?");
$question->setAnswer("A Reference Architecture is an extension of a company’s mission, vision, and strategy. It aligns multiple products, organizations, and disciplines with the current architecture while guiding future developments based on long-term goals.");
$question->create();

$question = new Question();
$question->setQuestion("What is the role of a Reference Architecture?");
$question->setAnswer("A Reference Architecture should address not only the technical architecture but also the business architecture and customer context. It provides generalized solutions for specified problems within defined contexts, guiding future architecture instantiations and ensuring alignment with customer needs and business goals.");
$question->create();

$question = new Question();
$question->setQuestion("How does a Reference Architecture evolve over time?");
$question->setAnswer("Reference Architectures evolve through feedback from actual systems, iterative updates in engineering documentation, and insights from previous architectures. As new technologies or applications emerge, they may require reference implementations or prototyping to validate the architecture. Continuous updates are managed through versioning, keeping the architecture relevant to business and customer needs.");
$question->create();

$question = new Question();
$question->setQuestion("What are architecture patterns and how do they relate to Reference Architectures?");
$question->setAnswer("Architecture patterns are high-level structures that define the relationship between a problem and its solution, providing guidance based on proven concepts. These patterns are crucial to Reference Architectures as they offer time-tested solutions to common problems. Patterns must be observed in multiple applications before being identified and documented as reusable elements.");
$question->create();

$question = new Question();
$question->setQuestion("What is the difference between implicit and explicit architectural knowledge?");
$question->setAnswer("Implicit architectural knowledge is undocumented, often transferred through mentorship or experience. It's mostly represented by technical leaders within an organization. Explicit architectural knowledge, on the other hand, is formally documented in the form of patterns, tools, templates, and metrics, making it accessible and reusable for others. Both types of knowledge are crucial, but explicit knowledge is easier to share and apply across different projects.");
$question->create();

$question = new Question();
$question->setQuestion("How can patterns be used to capture implicit knowledge in systems architecture?");
$question->setAnswer("Patterns are a formal way to document implicit knowledge, making it accessible and reusable. Without documentation, the full pattern might not be correctly applied in future projects. Storytelling and informal examples help transfer knowledge, but formal documentation ensures that patterns are understood and applied consistently, which ultimately improves communication and architecture implementation.");
$question->create();

$question = new Question();
$question->setQuestion("What are the challenges in developing a Reference Architecture?");
$question->setAnswer("Developing a Reference Architecture involves capturing a wide range of aspects such as system responsiveness, security, lifecycle concerns, and automation levels. One of the biggest challenges is balancing its complexity and readability, especially when it needs to serve various stakeholders. Additionally, it requires continuous updates to stay relevant with evolving standards, technologies, and business needs. Effective management, clear documentation, and stakeholder involvement are key for maintaining an impactful Reference Architecture.");
$question->create();



?>