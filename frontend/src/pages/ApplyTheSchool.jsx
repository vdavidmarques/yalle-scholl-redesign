import React from "react";
import MainBanner from "../components/MainBanner";
import IntroductionTextsApplySchool from "../components/IntroductionTextsApplySchool";
import Courses from "../components/Courses";

const ApplyTheSchool = () => {
    const slug = 'apply-the-school'
    return (
        <>
            <MainBanner slug={slug} />
            <IntroductionTextsApplySchool slug={slug} />
            <Courses />
        </>
    )
}

export default ApplyTheSchool;