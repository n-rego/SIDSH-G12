package tests;

import org.junit.platform.runner.JUnitPlatform;
import org.junit.platform.suite.api.SelectClasses;
import org.junit.runner.RunWith;
import org.junit.runners.Suite;
import org.junit.runners.Suite.SuiteClasses;


@RunWith(JUnitPlatform.class)
@SelectClasses({CreateHTMLTableTest.class,FillHTMLTableFieldsTest.class,ReadFileFromRepositoryTest.class})
public class AllTests {

}
