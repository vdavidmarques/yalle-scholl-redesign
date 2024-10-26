import React from "react"
import MainBanner from "../components/MainBanner";
import AboutContent from "../components/AboutContent";

const About = () => {
    const slug = "about-the-school";
    return (
        <main className="about-the-school">
            <MainBanner slug={slug} />

           <AboutContent slug={slug} />
        </main>
    )
}

export default About